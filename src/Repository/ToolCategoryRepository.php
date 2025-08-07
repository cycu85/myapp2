<?php

namespace App\Repository;

use App\Entity\ToolCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ToolCategory>
 */
class ToolCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToolCategory::class);
    }

    public function save(ToolCategory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ToolCategory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active categories ordered by sort_order
     *
     * @return ToolCategory[]
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('tc')
            ->andWhere('tc.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('tc.sortOrder', 'ASC')
            ->addOrderBy('tc.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find all categories with tools count
     *
     * @return array
     */
    public function findWithToolsCount(): array
    {
        return $this->createQueryBuilder('tc')
            ->select('tc', 'COUNT(t.id) as toolsCount')
            ->leftJoin('tc.tools', 't', 'WITH', 't.isActive = true')
            ->groupBy('tc.id')
            ->orderBy('tc.sortOrder', 'ASC')
            ->addOrderBy('tc.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find categories with active tools only
     *
     * @return ToolCategory[]
     */
    public function findWithActiveTools(): array
    {
        return $this->createQueryBuilder('tc')
            ->join('tc.tools', 't')
            ->where('tc.isActive = :active')
            ->andWhere('t.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('tc.sortOrder', 'ASC')
            ->addOrderBy('tc.name', 'ASC')
            ->groupBy('tc.id')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search categories by name
     *
     * @param string $searchTerm
     * @return ToolCategory[]
     */
    public function findBySearchTerm(string $searchTerm): array
    {
        return $this->createQueryBuilder('tc')
            ->where('tc.name LIKE :search')
            ->orWhere('tc.description LIKE :search')
            ->setParameter('search', '%' . $searchTerm . '%')
            ->orderBy('tc.sortOrder', 'ASC')
            ->addOrderBy('tc.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get categories for select options
     *
     * @return array
     */
    public function findForSelect(): array
    {
        $categories = $this->findActive();
        $options = [];
        
        foreach ($categories as $category) {
            $options[$category->getName()] = $category->getId();
        }
        
        return $options;
    }

    /**
     * Get next sort order for new category
     *
     * @return int
     */
    public function getNextSortOrder(): int
    {
        $result = $this->createQueryBuilder('tc')
            ->select('MAX(tc.sortOrder) as maxOrder')
            ->getQuery()
            ->getSingleScalarResult();
            
        return ($result ?? 0) + 10;
    }
}