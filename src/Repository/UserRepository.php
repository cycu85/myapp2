<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 *
 * @implements PasswordUpgraderInterface<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function findActiveUsers(): array
    {
        return $this->findBy(['isActive' => true], ['lastName' => 'ASC']);
    }

    public function findByRole(string $roleName): array
    {
        return $this->createQueryBuilder('u')
            ->innerJoin('u.userRoles', 'ur')
            ->innerJoin('ur.role', 'r')
            ->where('r.name = :roleName')
            ->andWhere('ur.isActive = :active')
            ->andWhere('u.isActive = :userActive')
            ->setParameter('roleName', $roleName)
            ->setParameter('active', true)
            ->setParameter('userActive', true)
            ->orderBy('u.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByModule(string $moduleName): array
    {
        return $this->createQueryBuilder('u')
            ->innerJoin('u.userRoles', 'ur')
            ->innerJoin('ur.role', 'r')
            ->innerJoin('r.module', 'm')
            ->where('m.name = :moduleName')
            ->andWhere('ur.isActive = :active')
            ->andWhere('u.isActive = :userActive')
            ->andWhere('m.isEnabled = :moduleEnabled')
            ->setParameter('moduleName', $moduleName)
            ->setParameter('active', true)
            ->setParameter('userActive', true)
            ->setParameter('moduleEnabled', true)
            ->orderBy('u.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Znajdź wszystkich podwładnych dla danego przełożonego
     */
    public function findSubordinates(User $supervisor): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.supervisor = :supervisor')
            ->andWhere('u.isActive = :active')
            ->setParameter('supervisor', $supervisor)
            ->setParameter('active', true)
            ->orderBy('u.firstName', 'ASC')
            ->addOrderBy('u.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Znajdź wszystkich podwładnych dla danego przełożonego (rekursywnie - wszyscy w hierarchii)
     */
    public function findAllSubordinatesRecursive(User $supervisor): array
    {
        $directSubordinates = $this->findSubordinates($supervisor);
        $allSubordinates = $directSubordinates;
        
        // Rekursywnie znajdź podwładnych podwładnych
        foreach ($directSubordinates as $subordinate) {
            $subSubordinates = $this->findAllSubordinatesRecursive($subordinate);
            $allSubordinates = array_merge($allSubordinates, $subSubordinates);
        }
        
        return $allSubordinates;
    }

    /**
     * Znajdź użytkowników według oddziału
     */
    public function findByBranch(string $branch): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.branch = :branch')
            ->andWhere('u.isActive = :active')
            ->setParameter('branch', $branch)
            ->setParameter('active', true)
            ->orderBy('u.firstName', 'ASC')
            ->addOrderBy('u.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Znajdź użytkowników według statusu
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('u')
            ->where('u.status = :status')
            ->andWhere('u.isActive = :active')
            ->setParameter('status', $status)
            ->setParameter('active', true)
            ->orderBy('u.firstName', 'ASC')
            ->addOrderBy('u.lastName', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Znajdź statystyki pracowników (liczba według statusu, oddziału itp.)
     */
    public function getEmployeeStatistics(): array
    {
        $statusStats = $this->createQueryBuilder('u')
            ->select('u.status, COUNT(u.id) as count')
            ->where('u.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('u.status')
            ->getQuery()
            ->getResult();

        $branchStats = $this->createQueryBuilder('u')
            ->select('u.branch, COUNT(u.id) as count')
            ->where('u.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('u.branch')
            ->getQuery()
            ->getResult();

        return [
            'by_status' => $statusStats,
            'by_branch' => $branchStats,
            'total_active' => $this->count(['isActive' => true]),
            'total_inactive' => $this->count(['isActive' => false])
        ];
    }
}