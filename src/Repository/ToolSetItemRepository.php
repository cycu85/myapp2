<?php

namespace App\Repository;

use App\Entity\Tool;
use App\Entity\ToolSet;
use App\Entity\ToolSetItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ToolSetItem>
 */
class ToolSetItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToolSetItem::class);
    }

    public function save(ToolSetItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ToolSetItem $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active items
     *
     * @return ToolSetItem[]
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('tsi')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('tsi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find items by tool set
     *
     * @param ToolSet $toolSet
     * @return ToolSetItem[]
     */
    public function findByToolSet(ToolSet $toolSet): array
    {
        return $this->createQueryBuilder('tsi')
            ->where('tsi.toolSet = :toolSet')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('toolSet', $toolSet)
            ->setParameter('active', true)
            ->orderBy('tsi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find items by tool
     *
     * @param Tool $tool
     * @return ToolSetItem[]
     */
    public function findByTool(Tool $tool): array
    {
        return $this->createQueryBuilder('tsi')
            ->where('tsi.tool = :tool')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('tool', $tool)
            ->setParameter('active', true)
            ->orderBy('tsi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find insufficient items (quantity < required)
     *
     * @return ToolSetItem[]
     */
    public function findInsufficient(): array
    {
        return $this->createQueryBuilder('tsi')
            ->where('tsi.quantity < tsi.requiredQuantity')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('tsi.toolSet', 'ASC')
            ->addOrderBy('tsi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find items with excess quantity
     *
     * @return ToolSetItem[]
     */
    public function findWithExcess(): array
    {
        return $this->createQueryBuilder('tsi')
            ->where('tsi.quantity > tsi.requiredQuantity')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('tsi.toolSet', 'ASC')
            ->addOrderBy('tsi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find insufficient items for a specific tool set
     *
     * @param ToolSet $toolSet
     * @return ToolSetItem[]
     */
    public function findInsufficientForSet(ToolSet $toolSet): array
    {
        return $this->createQueryBuilder('tsi')
            ->where('tsi.toolSet = :toolSet')
            ->andWhere('tsi.quantity < tsi.requiredQuantity')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('toolSet', $toolSet)
            ->setParameter('active', true)
            ->orderBy('tsi.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find items by criteria
     *
     * @param array $criteria
     * @return ToolSetItem[]
     */
    public function findByCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('tsi')
            ->leftJoin('tsi.toolSet', 'ts')
            ->leftJoin('tsi.tool', 't')
            ->leftJoin('t.category', 'tc')
            ->where('tsi.isActive = :active')
            ->setParameter('active', true);

        if (!empty($criteria['tool_set'])) {
            $qb->andWhere('tsi.toolSet = :toolSet')
               ->setParameter('toolSet', $criteria['tool_set']);
        }

        if (!empty($criteria['tool'])) {
            $qb->andWhere('tsi.tool = :tool')
               ->setParameter('tool', $criteria['tool']);
        }

        if (!empty($criteria['tool_category'])) {
            $qb->andWhere('t.category = :category')
               ->setParameter('category', $criteria['tool_category']);
        }

        if (!empty($criteria['completion_status'])) {
            switch ($criteria['completion_status']) {
                case 'sufficient':
                    $qb->andWhere('tsi.quantity >= tsi.requiredQuantity');
                    break;
                case 'insufficient':
                    $qb->andWhere('tsi.quantity < tsi.requiredQuantity');
                    break;
                case 'excess':
                    $qb->andWhere('tsi.quantity > tsi.requiredQuantity');
                    break;
            }
        }

        if (!empty($criteria['location'])) {
            $qb->andWhere('ts.location LIKE :location')
               ->setParameter('location', '%' . $criteria['location'] . '%');
        }

        return $qb->orderBy('ts.name', 'ASC')
                  ->addOrderBy('t.name', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * Get summary statistics for dashboard
     *
     * @return array
     */
    public function getStatistics(): array
    {
        $qb = $this->createQueryBuilder('tsi');
        
        $totalItems = $qb->select('COUNT(tsi.id)')
            ->where('tsi.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb2 = $this->createQueryBuilder('tsi2');
        $sufficientItems = $qb2->select('COUNT(tsi2.id)')
            ->where('tsi2.quantity >= tsi2.requiredQuantity')
            ->andWhere('tsi2.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb3 = $this->createQueryBuilder('tsi3');
        $insufficientItems = $qb3->select('COUNT(tsi3.id)')
            ->where('tsi3.quantity < tsi3.requiredQuantity')
            ->andWhere('tsi3.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb4 = $this->createQueryBuilder('tsi4');
        $excessItems = $qb4->select('COUNT(tsi4.id)')
            ->where('tsi4.quantity > tsi4.requiredQuantity')
            ->andWhere('tsi4.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb5 = $this->createQueryBuilder('tsi5');
        $totalRequired = $qb5->select('SUM(tsi5.requiredQuantity)')
            ->where('tsi5.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb6 = $this->createQueryBuilder('tsi6');
        $totalCurrent = $qb6->select('SUM(tsi6.quantity)')
            ->where('tsi6.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $fulfillmentRate = $totalRequired > 0 ? round(($totalCurrent / $totalRequired) * 100, 2) : 100;

        return [
            'total_items' => $totalItems,
            'sufficient_items' => $sufficientItems,
            'insufficient_items' => $insufficientItems,
            'excess_items' => $excessItems,
            'total_required_quantity' => $totalRequired ?? 0,
            'total_current_quantity' => $totalCurrent ?? 0,
            'fulfillment_rate' => $fulfillmentRate,
        ];
    }

    /**
     * Find items that can be optimized (redistributed between sets)
     *
     * @return array
     */
    public function findOptimizationOpportunities(): array
    {
        // Find tools that are in multiple sets with different availability
        return $this->createQueryBuilder('tsi')
            ->select('t.id as tool_id', 't.name as tool_name', 
                    'COUNT(tsi.id) as sets_count', 
                    'SUM(tsi.requiredQuantity) as total_required',
                    'SUM(tsi.quantity) as total_current')
            ->join('tsi.tool', 't')
            ->where('tsi.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('t.id')
            ->having('COUNT(tsi.id) > 1')
            ->orderBy('sets_count', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Check if tool is already in a tool set
     *
     * @param ToolSet $toolSet
     * @param Tool $tool
     * @return bool
     */
    public function isToolInSet(ToolSet $toolSet, Tool $tool): bool
    {
        $count = $this->createQueryBuilder('tsi')
            ->select('COUNT(tsi.id)')
            ->where('tsi.toolSet = :toolSet')
            ->andWhere('tsi.tool = :tool')
            ->andWhere('tsi.isActive = :active')
            ->setParameter('toolSet', $toolSet)
            ->setParameter('tool', $tool)
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        return $count > 0;
    }

    /**
     * Get most used tools across all sets
     *
     * @param int $limit
     * @return array
     */
    public function getMostUsedTools(int $limit = 10): array
    {
        return $this->createQueryBuilder('tsi')
            ->select('t.id', 't.name', 'tc.name as category_name', 
                    'COUNT(tsi.id) as usage_count', 
                    'SUM(tsi.requiredQuantity) as total_required')
            ->join('tsi.tool', 't')
            ->join('t.category', 'tc')
            ->where('tsi.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('t.id')
            ->orderBy('usage_count', 'DESC')
            ->addOrderBy('total_required', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get total quantity requirements by tool category
     *
     * @return array
     */
    public function getQuantityRequirementsByCategory(): array
    {
        return $this->createQueryBuilder('tsi')
            ->select('tc.name as category_name', 
                    'COUNT(DISTINCT tsi.tool) as unique_tools',
                    'SUM(tsi.requiredQuantity) as total_required',
                    'SUM(tsi.quantity) as total_current')
            ->join('tsi.tool', 't')
            ->join('t.category', 'tc')
            ->where('tsi.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('tc.id')
            ->orderBy('total_required', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find duplicate tool assignments (same tool in multiple sets)
     *
     * @return array
     */
    public function findDuplicateAssignments(): array
    {
        return $this->createQueryBuilder('tsi')
            ->select('t.id as tool_id', 't.name as tool_name',
                    'ts.id as set_id', 'ts.name as set_name',
                    'tsi.quantity', 'tsi.requiredQuantity')
            ->join('tsi.tool', 't')
            ->join('tsi.toolSet', 'ts')
            ->where('tsi.isActive = :active')
            ->andWhere('t.id IN (
                SELECT IDENTITY(tsi2.tool) FROM App\\Entity\\ToolSetItem tsi2 
                WHERE tsi2.isActive = true 
                GROUP BY IDENTITY(tsi2.tool) 
                HAVING COUNT(tsi2.id) > 1
            )')
            ->setParameter('active', true)
            ->orderBy('t.name', 'ASC')
            ->addOrderBy('ts.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}