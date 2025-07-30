<?php

namespace App\Repository;

use App\Entity\UserRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserRole>
 *
 * @method UserRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRole[]    findAll()
 * @method UserRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRole::class);
    }

    public function findActiveByUser(int $userId): array
    {
        return $this->findBy([
            'user' => $userId,
            'isActive' => true
        ]);
    }

    public function findByRole(int $roleId): array
    {
        return $this->findBy([
            'role' => $roleId,
            'isActive' => true
        ]);
    }
}