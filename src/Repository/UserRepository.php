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
}