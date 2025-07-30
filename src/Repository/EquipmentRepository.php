<?php

namespace App\Repository;

use App\Entity\Equipment;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Equipment>
 *
 * @method Equipment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Equipment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Equipment[]    findAll()
 * @method Equipment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equipment::class);
    }

    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.status = :status')
            ->setParameter('status', $status)
            ->orderBy('e.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAvailable(): array
    {
        return $this->findByStatus(Equipment::STATUS_AVAILABLE);
    }

    public function findInUse(): array
    {
        return $this->findByStatus(Equipment::STATUS_IN_USE);
    }

    public function findAssignedToUser(User $user): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.assignedTo = :user')
            ->setParameter('user', $user)
            ->orderBy('e.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByCategory(int $categoryId): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.category = :categoryId')
            ->setParameter('categoryId', $categoryId)
            ->orderBy('e.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findExpiredWarranty(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.warrantyExpiry < :now')
            ->andWhere('e.warrantyExpiry IS NOT NULL')
            ->setParameter('now', new \DateTime())
            ->orderBy('e.warrantyExpiry', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findDueForInspection(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.nextInspectionDate <= :nextWeek')
            ->andWhere('e.nextInspectionDate IS NOT NULL')
            ->setParameter('nextWeek', new \DateTime('+7 days'))
            ->orderBy('e.nextInspectionDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findBySearchTerm(string $term): array
    {
        return $this->createQueryBuilder('e')
            ->leftJoin('e.category', 'c')
            ->andWhere('e.name LIKE :term OR e.inventoryNumber LIKE :term OR e.serialNumber LIKE :term OR e.manufacturer LIKE :term OR e.model LIKE :term OR c.name LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('e.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getStatisticsByStatus(): array
    {
        $result = $this->createQueryBuilder('e')
            ->select('e.status, COUNT(e.id) as count')
            ->groupBy('e.status')
            ->getQuery()
            ->getResult();

        $statistics = [];
        foreach ($result as $row) {
            $statistics[$row['status']] = (int) $row['count'];
        }

        return $statistics;
    }

    public function getTotalValue(): float
    {
        $result = $this->createQueryBuilder('e')
            ->select('SUM(e.purchasePrice) as total')
            ->andWhere('e.purchasePrice IS NOT NULL')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    public function save(Equipment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Equipment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}