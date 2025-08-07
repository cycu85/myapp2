<?php

namespace App\Repository;

use App\Entity\Tool;
use App\Entity\ToolInspection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ToolInspection>
 */
class ToolInspectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToolInspection::class);
    }

    public function save(ToolInspection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ToolInspection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active inspections
     *
     * @return ToolInspection[]
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('ti')
            ->andWhere('ti.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('ti.inspectionDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find inspections by tool
     *
     * @param Tool $tool
     * @return ToolInspection[]
     */
    public function findByTool(Tool $tool): array
    {
        return $this->createQueryBuilder('ti')
            ->where('ti.tool = :tool')
            ->andWhere('ti.isActive = :active')
            ->setParameter('tool', $tool)
            ->setParameter('active', true)
            ->orderBy('ti.inspectionDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find inspections by result
     *
     * @param string $result
     * @return ToolInspection[]
     */
    public function findByResult(string $result): array
    {
        return $this->createQueryBuilder('ti')
            ->where('ti.result = :result')
            ->andWhere('ti.isActive = :active')
            ->setParameter('result', $result)
            ->setParameter('active', true)
            ->orderBy('ti.inspectionDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find overdue inspections (planned date in the past but not completed)
     *
     * @return ToolInspection[]
     */
    public function findOverdue(): array
    {
        $today = new \DateTime();
        
        return $this->createQueryBuilder('ti')
            ->where('ti.plannedDate < :today')
            ->andWhere('ti.inspectionDate > ti.plannedDate OR ti.inspectionDate IS NULL')
            ->andWhere('ti.isActive = :active')
            ->setParameter('today', $today)
            ->setParameter('active', true)
            ->orderBy('ti.plannedDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find inspections completed in date range
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @return ToolInspection[]
     */
    public function findCompletedInPeriod(\DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('ti')
            ->where('ti.inspectionDate BETWEEN :start AND :end')
            ->andWhere('ti.isActive = :active')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->setParameter('active', true)
            ->orderBy('ti.inspectionDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find inspections planned in date range
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @return ToolInspection[]
     */
    public function findPlannedInPeriod(\DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('ti')
            ->where('ti.plannedDate BETWEEN :start AND :end')
            ->andWhere('ti.isActive = :active')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->setParameter('active', true)
            ->orderBy('ti.plannedDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find upcoming inspections (planned in next X days)
     *
     * @param int $days
     * @return ToolInspection[]
     */
    public function findUpcoming(int $days = 30): array
    {
        $today = new \DateTime();
        $upcomingDate = new \DateTime('+' . $days . ' days');
        
        return $this->createQueryBuilder('ti')
            ->where('ti.plannedDate BETWEEN :today AND :upcoming')
            ->andWhere('ti.inspectionDate IS NULL OR ti.inspectionDate > ti.plannedDate')
            ->andWhere('ti.isActive = :active')
            ->setParameter('today', $today)
            ->setParameter('upcoming', $upcomingDate)
            ->setParameter('active', true)
            ->orderBy('ti.plannedDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find inspections with defects
     *
     * @return ToolInspection[]
     */
    public function findWithDefects(): array
    {
        return $this->createQueryBuilder('ti')
            ->where('JSON_LENGTH(ti.defectsFound) > 0')
            ->andWhere('ti.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('ti.inspectionDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search inspections by multiple criteria
     *
     * @param array $criteria
     * @return ToolInspection[]
     */
    public function findByCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('ti')
            ->leftJoin('ti.tool', 't')
            ->leftJoin('t.category', 'tc')
            ->leftJoin('t.type', 'tt')
            ->where('ti.isActive = :active')
            ->setParameter('active', true);

        if (!empty($criteria['tool'])) {
            $qb->andWhere('ti.tool = :tool')
               ->setParameter('tool', $criteria['tool']);
        }

        if (!empty($criteria['result'])) {
            $qb->andWhere('ti.result = :result')
               ->setParameter('result', $criteria['result']);
        }

        if (!empty($criteria['inspector'])) {
            $qb->andWhere('ti.inspectorName LIKE :inspector')
               ->setParameter('inspector', '%' . $criteria['inspector'] . '%');
        }

        if (!empty($criteria['date_from'])) {
            $qb->andWhere('ti.inspectionDate >= :dateFrom')
               ->setParameter('dateFrom', $criteria['date_from']);
        }

        if (!empty($criteria['date_to'])) {
            $qb->andWhere('ti.inspectionDate <= :dateTo')
               ->setParameter('dateTo', $criteria['date_to']);
        }

        if (!empty($criteria['category'])) {
            $qb->andWhere('t.category = :category')
               ->setParameter('category', $criteria['category']);
        }

        if (!empty($criteria['has_defects'])) {
            if ($criteria['has_defects'] === 'yes') {
                $qb->andWhere('JSON_LENGTH(ti.defectsFound) > 0');
            } elseif ($criteria['has_defects'] === 'no') {
                $qb->andWhere('JSON_LENGTH(ti.defectsFound) = 0 OR ti.defectsFound IS NULL');
            }
        }

        return $qb->orderBy('ti.inspectionDate', 'DESC')
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
        $qb = $this->createQueryBuilder('ti');
        
        $totalInspections = $qb->select('COUNT(ti.id)')
            ->where('ti.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb2 = $this->createQueryBuilder('ti2');
        $passedInspections = $qb2->select('COUNT(ti2.id)')
            ->where('ti2.isActive = :active')
            ->andWhere('ti2.result = :passed')
            ->setParameter('active', true)
            ->setParameter('passed', ToolInspection::RESULT_PASSED)
            ->getQuery()
            ->getSingleScalarResult();

        $qb3 = $this->createQueryBuilder('ti3');
        $failedInspections = $qb3->select('COUNT(ti3.id)')
            ->where('ti3.isActive = :active')
            ->andWhere('ti3.result IN (:failed)')
            ->setParameter('active', true)
            ->setParameter('failed', [
                ToolInspection::RESULT_FAILED,
                ToolInspection::RESULT_NEEDS_REPAIR,
                ToolInspection::RESULT_OUT_OF_SERVICE
            ])
            ->getQuery()
            ->getSingleScalarResult();

        $qb4 = $this->createQueryBuilder('ti4');
        $overdueInspections = $qb4->select('COUNT(ti4.id)')
            ->where('ti4.plannedDate < :today')
            ->andWhere('ti4.inspectionDate > ti4.plannedDate OR ti4.inspectionDate IS NULL')
            ->andWhere('ti4.isActive = :active')
            ->setParameter('today', new \DateTime())
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        $qb5 = $this->createQueryBuilder('ti5');
        $upcomingInspections = $qb5->select('COUNT(ti5.id)')
            ->where('ti5.plannedDate BETWEEN :today AND :upcoming')
            ->andWhere('ti5.inspectionDate IS NULL OR ti5.inspectionDate > ti5.plannedDate')
            ->andWhere('ti5.isActive = :active')
            ->setParameter('today', new \DateTime())
            ->setParameter('upcoming', new \DateTime('+30 days'))
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_inspections' => $totalInspections,
            'passed_inspections' => $passedInspections,
            'failed_inspections' => $failedInspections,
            'overdue_inspections' => $overdueInspections,
            'upcoming_inspections' => $upcomingInspections,
            'pass_rate' => $totalInspections > 0 ? round(($passedInspections / $totalInspections) * 100, 2) : 0,
        ];
    }

    /**
     * Get last inspection for tool
     *
     * @param Tool $tool
     * @return ToolInspection|null
     */
    public function getLastInspectionForTool(Tool $tool): ?ToolInspection
    {
        return $this->createQueryBuilder('ti')
            ->where('ti.tool = :tool')
            ->andWhere('ti.isActive = :active')
            ->setParameter('tool', $tool)
            ->setParameter('active', true)
            ->orderBy('ti.inspectionDate', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Count inspections by result
     *
     * @return array
     */
    public function countByResult(): array
    {
        return $this->createQueryBuilder('ti')
            ->select('ti.result', 'COUNT(ti.id) as inspections_count')
            ->where('ti.isActive = :active')
            ->setParameter('active', true)
            ->groupBy('ti.result')
            ->orderBy('inspections_count', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get average inspection cost
     *
     * @return float
     */
    public function getAverageInspectionCost(): float
    {
        $result = $this->createQueryBuilder('ti')
            ->select('AVG(ti.cost) as avgCost')
            ->where('ti.cost IS NOT NULL')
            ->andWhere('ti.isActive = :active')
            ->setParameter('active', true)
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    /**
     * Find inspections in date range
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @return ToolInspection[]
     */
    public function findInDateRange(\DateTimeInterface $startDate, \DateTimeInterface $endDate): array
    {
        return $this->createQueryBuilder('ti')
            ->where('(ti.plannedDate BETWEEN :start AND :end OR ti.inspectionDate BETWEEN :start AND :end)')
            ->andWhere('ti.isActive = :active')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->setParameter('active', true)
            ->orderBy('ti.plannedDate', 'ASC')
            ->addOrderBy('ti.inspectionDate', 'ASC')
            ->getQuery()
            ->getResult();
    }
}