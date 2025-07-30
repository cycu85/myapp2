<?php

namespace App\Repository;

use App\Entity\Equipment;
use App\Entity\EquipmentAttachment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EquipmentAttachment>
 *
 * @method EquipmentAttachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method EquipmentAttachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method EquipmentAttachment[]    findAll()
 * @method EquipmentAttachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipmentAttachmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EquipmentAttachment::class);
    }

    public function findByEquipment(Equipment $equipment): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.equipment = :equipment')
            ->setParameter('equipment', $equipment)
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.type = :type')
            ->setParameter('type', $type)
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findImages(): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.mimeType LIKE :imageType')
            ->setParameter('imageType', 'image/%')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function save(EquipmentAttachment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EquipmentAttachment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}