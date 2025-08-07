<?php

namespace App\Repository;

use App\Entity\Tool;
use App\Entity\ToolCategory;
use App\Entity\ToolType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Tool>
 */
class ToolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tool::class);
    }

    public function save(Tool $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Tool $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active tools
     *
     * @return Tool[]
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools by category
     *
     * @param ToolCategory $category
     * @return Tool[]
     */
    public function findByCategory(ToolCategory $category): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.category = :category')
            ->andWhere('t.isActive = :active')
            ->setParameter('category', $category)
            ->setParameter('active', true)
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools by type
     *
     * @param ToolType $type
     * @return Tool[]
     */
    public function findByType(ToolType $type): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.type = :type')
            ->andWhere('t.isActive = :active')
            ->setParameter('type', $type)
            ->setParameter('active', true)
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools with low quantity
     *
     * @return Tool[]
     */
    public function findWithLowQuantity(): array
    {
        return $this->createQueryBuilder('t')
            ->join('t.type', 'tt')
            ->where('t.isActive = :active')
            ->andWhere('tt.isMultiQuantity = :multi')
            ->andWhere('t.minQuantity IS NOT NULL')
            ->andWhere('t.currentQuantity <= t.minQuantity')
            ->setParameter('active', true)
            ->setParameter('multi', true)
            ->orderBy('t.currentQuantity', 'ASC')
            ->addOrderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools with upcoming inspections
     *
     * @param int $days
     * @return Tool[]
     */
    public function findWithUpcomingInspections(int $days = 30): array
    {
        $upcomingDate = new \DateTime('+' . $days . ' days');
        
        return $this->createQueryBuilder('t')
            ->where('t.isActive = :active')
            ->andWhere('t.nextInspectionDate IS NOT NULL')
            ->andWhere('t.nextInspectionDate <= :upcomingDate')
            ->setParameter('active', true)
            ->setParameter('upcomingDate', $upcomingDate)
            ->orderBy('t.nextInspectionDate', 'ASC')
            ->addOrderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools with overdue inspections
     *
     * @return Tool[]
     */
    public function findWithOverdueInspections(): array
    {
        $today = new \DateTime();
        
        return $this->createQueryBuilder('t')
            ->where('t.isActive = :active')
            ->andWhere('t.nextInspectionDate IS NOT NULL')
            ->andWhere('t.nextInspectionDate < :today')
            ->setParameter('active', true)
            ->setParameter('today', $today)
            ->orderBy('t.nextInspectionDate', 'ASC')
            ->addOrderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools by status
     *
     * @param string $status
     * @return Tool[]
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.status = :status')
            ->andWhere('t.isActive = :active')
            ->setParameter('status', $status)
            ->setParameter('active', true)
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search tools by multiple criteria
     *
     * @param array $criteria
     * @return Tool[]
     */
    public function findByCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.category', 'tc')
            ->leftJoin('t.type', 'tt')
            ->where('t.isActive = :active')
            ->setParameter('active', true);

        if (!empty($criteria['search'])) {
            $qb->andWhere('(t.name LIKE :search OR t.description LIKE :search OR t.serialNumber LIKE :search OR t.inventoryNumber LIKE :search OR t.manufacturer LIKE :search OR t.model LIKE :search)')
               ->setParameter('search', '%' . $criteria['search'] . '%');
        }

        if (!empty($criteria['category'])) {
            $qb->andWhere('t.category = :category')
               ->setParameter('category', $criteria['category']);
        }

        if (!empty($criteria['type'])) {
            $qb->andWhere('t.type = :type')
               ->setParameter('type', $criteria['type']);
        }

        if (!empty($criteria['status'])) {
            $qb->andWhere('t.status = :status')
               ->setParameter('status', $criteria['status']);
        }

        if (!empty($criteria['location'])) {
            $qb->andWhere('t.location LIKE :location')
               ->setParameter('location', '%' . $criteria['location'] . '%');
        }

        if (!empty($criteria['manufacturer'])) {
            $qb->andWhere('t.manufacturer LIKE :manufacturer')
               ->setParameter('manufacturer', '%' . $criteria['manufacturer'] . '%');
        }

        return $qb->orderBy('t.name', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * Get statistics for dashboard
     *
     * @return array
     */
    public function getStatistics(): array
    {
        $qb = $this->createQueryBuilder('t');
        
        $totalTools = $qb->select('COUNT(t.id)')
            ->where('t.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb2 = $this->createQueryBuilder('t2');
        $activeTools = $qb2->select('COUNT(t2.id)')
            ->where('t2.isActive = :active')
            ->andWhere('t2.status = :status')
            ->setParameter('active', true)
            ->setParameter('status', Tool::STATUS_ACTIVE)
            ->getQuery()
            ->getSingleScalarResult();

        $qb3 = $this->createQueryBuilder('t3');
        $upcomingInspections = $qb3->select('COUNT(t3.id)')
            ->where('t3.isActive = :active')
            ->andWhere('t3.nextInspectionDate IS NOT NULL')
            ->andWhere('t3.nextInspectionDate <= :upcomingDate')
            ->setParameter('active', true)
            ->setParameter('upcomingDate', new \DateTime('+30 days'))
            ->getQuery()
            ->getSingleScalarResult();

        $qb4 = $this->createQueryBuilder('t4');
        $lowQuantityTools = $qb4->select('COUNT(t4.id)')
            ->join('t4.type', 'tt4')
            ->where('t4.isActive = :active')
            ->andWhere('tt4.isMultiQuantity = :multi')
            ->andWhere('t4.minQuantity IS NOT NULL')
            ->andWhere('t4.currentQuantity <= t4.minQuantity')
            ->setParameter('active', true)
            ->setParameter('multi', true)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_tools' => $totalTools,
            'active_tools' => $activeTools,
            'upcoming_inspections' => $upcomingInspections,
            'low_quantity_tools' => $lowQuantityTools,
            'inactive_tools' => $totalTools - $activeTools,
        ];
    }

    /**
     * Find tools by serial number
     *
     * @param string $serialNumber
     * @return Tool[]
     */
    public function findBySerialNumber(string $serialNumber): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.serialNumber = :serial')
            ->setParameter('serial', $serialNumber)
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tools by inventory number
     *
     * @param string $inventoryNumber
     * @return Tool[]
     */
    public function findByInventoryNumber(string $inventoryNumber): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.inventoryNumber = :inventory')
            ->setParameter('inventory', $inventoryNumber)
            ->orderBy('t.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get tools for select options
     *
     * @return array
     */
    public function findForSelect(): array
    {
        $tools = $this->findActive();
        $options = [];
        
        foreach ($tools as $tool) {
            $options[$tool->getFullName()] = $tool->getId();
        }
        
        return $options;
    }

    /**
     * Count tools by category
     *
     * @return array
     */
    public function countByCategory(): array
    {
        return $this->createQueryBuilder('t')
            ->select('tc.name as category_name', 'COUNT(t.id) as tools_count')
            ->join('t.category', 'tc')
            ->where('t.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('tc.id')
            ->orderBy('tools_count', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Count tools by status
     *
     * @return array
     */
    public function countByStatus(): array
    {
        return $this->createQueryBuilder('t')
            ->select('t.status', 'COUNT(t.id) as tools_count')
            ->where('t.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('t.status')
            ->orderBy('tools_count', 'DESC')
            ->getQuery()
            ->getResult();
    }
}