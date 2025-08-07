<?php

namespace App\Repository;

use App\Entity\ToolType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ToolType>
 */
class ToolTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToolType::class);
    }

    public function save(ToolType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ToolType $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find all active types
     *
     * @return ToolType[]
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('tt')
            ->andWhere('tt.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('tt.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find multi-quantity types only
     *
     * @return ToolType[]
     */
    public function findMultiQuantity(): array
    {
        return $this->createQueryBuilder('tt')
            ->where('tt.isActive = :active')
            ->andWhere('tt.isMultiQuantity = :multi')
            ->setParameter('active', true)
            ->setParameter('multi', true)
            ->orderBy('tt.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find single-quantity types only
     *
     * @return ToolType[]
     */
    public function findSingleQuantity(): array
    {
        return $this->createQueryBuilder('tt')
            ->where('tt.isActive = :active')
            ->andWhere('tt.isMultiQuantity = :multi')
            ->setParameter('active', true)
            ->setParameter('multi', false)
            ->orderBy('tt.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find all types with tools count
     *
     * @return array
     */
    public function findWithToolsCount(): array
    {
        return $this->createQueryBuilder('tt')
            ->select('tt', 'COUNT(t.id) as toolsCount')
            ->leftJoin('tt.tools', 't', 'WITH', 't.isActive = true')
            ->groupBy('tt.id')
            ->orderBy('tt.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search types by name
     *
     * @param string $searchTerm
     * @return ToolType[]
     */
    public function findBySearchTerm(string $searchTerm): array
    {
        return $this->createQueryBuilder('tt')
            ->where('tt.name LIKE :search')
            ->orWhere('tt.description LIKE :search')
            ->setParameter('search', '%' . $searchTerm . '%')
            ->orderBy('tt.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get types for select options
     *
     * @return array
     */
    public function findForSelect(): array
    {
        $types = $this->findActive();
        $options = [];
        
        foreach ($types as $type) {
            $label = $type->getName();
            if ($type->isMultiQuantity()) {
                $label .= ' (wielosztuki)';
            }
            $options[$label] = $type->getId();
        }
        
        return $options;
    }

    /**
     * Get multi-quantity types for select options
     *
     * @return array
     */
    public function findMultiQuantityForSelect(): array
    {
        $types = $this->findMultiQuantity();
        $options = [];
        
        foreach ($types as $type) {
            $options[$type->getName()] = $type->getId();
        }
        
        return $options;
    }

    /**
     * Get single-quantity types for select options
     *
     * @return array
     */
    public function findSingleQuantityForSelect(): array
    {
        $types = $this->findSingleQuantity();
        $options = [];
        
        foreach ($types as $type) {
            $options[$type->getName()] = $type->getId();
        }
        
        return $options;
    }
}