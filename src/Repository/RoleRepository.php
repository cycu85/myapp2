<?php

namespace App\Repository;

use App\Entity\Role;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Role>
 *
 * @method Role|null find($id, $lockMode = null, $lockVersion = null)
 * @method Role|null findOneBy(array $criteria, array $orderBy = null)
 * @method Role[]    findAll()
 * @method Role[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Role::class);
    }

    public function findByModule(string $moduleName): array
    {
        return $this->createQueryBuilder('r')
            ->innerJoin('r.module', 'm')
            ->where('m.name = :moduleName')
            ->setParameter('moduleName', $moduleName)
            ->orderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findSystemRoles(): array
    {
        return $this->findBy(['isSystemRole' => true], ['name' => 'ASC']);
    }

    public function findCustomRoles(): array
    {
        return $this->findBy(['isSystemRole' => false], ['name' => 'ASC']);
    }
}