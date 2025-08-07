<?php

namespace App\Repository;

use App\Entity\ToolSet;
use App\Entity\Tool;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ToolSet>
 */
class ToolSetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToolSet::class);
    }

    public function save(ToolSet $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ToolSet $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active tool sets
     *
     * @return ToolSet[]
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('ts')
            ->andWhere('ts.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('ts.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tool sets by status
     *
     * @param string $status
     * @return ToolSet[]
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('ts')
            ->where('ts.status = :status')
            ->andWhere('ts.isActive = :active')
            ->setParameter('status', $status)
            ->setParameter('active', true)
            ->orderBy('ts.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find incomplete tool sets (missing tools)
     *
     * @return ToolSet[]
     */
    public function findIncomplete(): array
    {
        return $this->createQueryBuilder('ts')
            ->leftJoin('ts.items', 'tsi')
            ->where('ts.isActive = :active')
            ->andWhere('ts.status != :retired')
            ->andWhere('tsi.quantity < tsi.requiredQuantity')
            ->setParameter('active', true)
            ->setParameter('retired', ToolSet::STATUS_RETIRED)
            ->groupBy('ts.id')
            ->orderBy('ts.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tool sets by location
     *
     * @param string $location
     * @return ToolSet[]
     */
    public function findByLocation(string $location): array
    {
        return $this->createQueryBuilder('ts')
            ->where('ts.location LIKE :location')
            ->andWhere('ts.isActive = :active')
            ->setParameter('location', '%' . $location . '%')
            ->setParameter('active', true)
            ->orderBy('ts.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tool sets containing a specific tool
     *
     * @param Tool $tool
     * @return ToolSet[]
     */
    public function findContainingTool(Tool $tool): array
    {
        return $this->createQueryBuilder('ts')
            ->join('ts.items', 'tsi')
            ->where('tsi.tool = :tool')
            ->andWhere('ts.isActive = :active')
            ->andWhere('tsi.isActive = :itemActive')
            ->setParameter('tool', $tool)
            ->setParameter('active', true)
            ->setParameter('itemActive', true)
            ->orderBy('ts.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search tool sets by multiple criteria
     *
     * @param array $criteria
     * @return ToolSet[]
     */
    public function findByCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('ts')
            ->where('ts.isActive = :active')
            ->setParameter('active', true);

        if (!empty($criteria['search'])) {
            $qb->andWhere('(ts.name LIKE :search OR ts.description LIKE :search OR ts.code LIKE :search)')
               ->setParameter('search', '%' . $criteria['search'] . '%');
        }

        if (!empty($criteria['status'])) {
            $qb->andWhere('ts.status = :status')
               ->setParameter('status', $criteria['status']);
        }

        if (!empty($criteria['location'])) {
            $qb->andWhere('ts.location LIKE :location')
               ->setParameter('location', '%' . $criteria['location'] . '%');
        }

        if (!empty($criteria['completion'])) {
            switch ($criteria['completion']) {
                case 'complete':
                    // This is complex, we'll handle it in the service layer
                    break;
                case 'incomplete':
                    $qb->leftJoin('ts.items', 'tsi_incomplete')
                       ->andWhere('tsi_incomplete.quantity < tsi_incomplete.requiredQuantity')
                       ->groupBy('ts.id');
                    break;
            }
        }

        return $qb->orderBy('ts.name', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * Find tool sets with their item counts
     *
     * @return array
     */
    public function findWithItemCounts(): array
    {
        return $this->createQueryBuilder('ts')
            ->select('ts', 'COUNT(tsi.id) as itemsCount')
            ->leftJoin('ts.items', 'tsi', 'WITH', 'tsi.isActive = true')
            ->where('ts.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('ts.id')
            ->orderBy('ts.name', 'ASC')
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
        $qb = $this->createQueryBuilder('ts');
        
        $totalSets = $qb->select('COUNT(ts.id)')
            ->where('ts.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb2 = $this->createQueryBuilder('ts2');
        $activeSets = $qb2->select('COUNT(ts2.id)')
            ->where('ts2.isActive = :active')
            ->andWhere('ts2.status = :status')
            ->setParameter('active', true)
            ->setParameter('status', ToolSet::STATUS_ACTIVE)
            ->getQuery()
            ->getSingleScalarResult();

        $qb3 = $this->createQueryBuilder('ts3');
        $incompleteSets = $qb3->select('COUNT(DISTINCT ts3.id)')
            ->leftJoin('ts3.items', 'tsi3')
            ->where('ts3.isActive = :active')
            ->andWhere('ts3.status != :retired')
            ->andWhere('tsi3.quantity < tsi3.requiredQuantity')
            ->setParameter('active', true)
            ->setParameter('retired', ToolSet::STATUS_RETIRED)
            ->getQuery()
            ->getSingleScalarResult();

        $qb4 = $this->createQueryBuilder('ts4');
        $maintenanceSets = $qb4->select('COUNT(ts4.id)')
            ->where('ts4.isActive = :active')
            ->andWhere('ts4.status = :maintenance')
            ->setParameter('active', true)
            ->setParameter('maintenance', ToolSet::STATUS_MAINTENANCE)
            ->getQuery()
            ->getSingleScalarResult();

        // Calculate average completion percentage (this is an approximation)
        $qb5 = $this->createQueryBuilder('ts5');
        $completionData = $qb5->select('ts5.id', 'tsi5.quantity', 'tsi5.requiredQuantity')
            ->leftJoin('ts5.items', 'tsi5', 'WITH', 'tsi5.isActive = true')
            ->where('ts5.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getResult();

        $totalCompletion = 0;
        $setCompletions = [];
        
        foreach ($completionData as $data) {
            $setId = $data['id'];
            if (!isset($setCompletions[$setId])) {
                $setCompletions[$setId] = ['current' => 0, 'required' => 0];
            }
            $setCompletions[$setId]['current'] += (int) $data['quantity'];
            $setCompletions[$setId]['required'] += (int) $data['requiredQuantity'];
        }

        $avgCompletion = 0;
        if (count($setCompletions) > 0) {
            foreach ($setCompletions as $completion) {
                if ($completion['required'] > 0) {
                    $totalCompletion += ($completion['current'] / $completion['required']);
                } else {
                    $totalCompletion += 1; // Empty sets are considered complete
                }
            }
            $avgCompletion = round(($totalCompletion / count($setCompletions)) * 100, 2);
        }

        return [
            'total_sets' => $totalSets,
            'active_sets' => $activeSets,
            'incomplete_sets' => $incompleteSets,
            'maintenance_sets' => $maintenanceSets,
            'retired_sets' => $totalSets - $activeSets - $maintenanceSets,
            'average_completion' => $avgCompletion,
        ];
    }

    /**
     * Find tool sets for select options
     *
     * @return array
     */
    public function findForSelect(): array
    {
        $sets = $this->findActive();
        $options = [];
        
        foreach ($sets as $set) {
            $label = $set->getName();
            if ($set->getCode()) {
                $label .= ' (' . $set->getCode() . ')';
            }
            $options[$label] = $set->getId();
        }
        
        return $options;
    }

    /**
     * Find by code
     *
     * @param string $code
     * @return ToolSet|null
     */
    public function findByCode(string $code): ?ToolSet
    {
        return $this->createQueryBuilder('ts')
            ->where('ts.code = :code')
            ->setParameter('code', $code)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Count tool sets by status
     *
     * @return array
     */
    public function countByStatus(): array
    {
        return $this->createQueryBuilder('ts')
            ->select('ts.status', 'COUNT(ts.id) as sets_count')
            ->where('ts.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('ts.status')
            ->orderBy('sets_count', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get most recently created tool sets
     *
     * @param int $limit
     * @return ToolSet[]
     */
    public function findRecentlyCreated(int $limit = 10): array
    {
        return $this->createQueryBuilder('ts')
            ->where('ts.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('ts.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find tool sets by location pattern
     *
     * @return array
     */
    public function findGroupedByLocation(): array
    {
        return $this->createQueryBuilder('ts')
            ->select('ts.location', 'COUNT(ts.id) as sets_count')
            ->where('ts.isActive = :active')
            ->andWhere('ts.location IS NOT NULL')
            ->setParameter('active', true)
            ->groupBy('ts.location')
            ->orderBy('sets_count', 'DESC')
            ->getQuery()
            ->getResult();
    }
}