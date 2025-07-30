<?php

namespace App\Repository;

use App\Entity\Equipment;
use App\Entity\EquipmentLog;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EquipmentLog>
 *
 * @method EquipmentLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method EquipmentLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method EquipmentLog[]    findAll()
 * @method EquipmentLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipmentLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EquipmentLog::class);
    }

    public function findByEquipment(Equipment $equipment): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.equipment = :equipment')
            ->setParameter('equipment', $equipment)
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.createdBy = :user OR l.previousAssignee = :user OR l.newAssignee = :user')
            ->setParameter('user', $user)
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByAction(string $action): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.action = :action')
            ->setParameter('action', $action)
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findRecentActivity(int $limit = 10): array
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.equipment', 'e')
            ->leftJoin('l.createdBy', 'u')
            ->orderBy('l.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findActivityByDateRange(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.createdAt >= :startDate')
            ->andWhere('l.createdAt <= :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function save(EquipmentLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EquipmentLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}