<?php

namespace App\Repository;

use App\Entity\EquipmentCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EquipmentCategory>
 *
 * @method EquipmentCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method EquipmentCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method EquipmentCategory[]    findAll()
 * @method EquipmentCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipmentCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EquipmentCategory::class);
    }

    public function findActive(): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('c.sortOrder', 'ASC')
            ->addOrderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.sortOrder', 'ASC')
            ->addOrderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findWithEquipmentCount(): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.equipment', 'e')
            ->addSelect('COUNT(e.id) as equipmentCount')
            ->groupBy('c.id')
            ->orderBy('c.sortOrder', 'ASC')
            ->addOrderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function save(EquipmentCategory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EquipmentCategory $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}