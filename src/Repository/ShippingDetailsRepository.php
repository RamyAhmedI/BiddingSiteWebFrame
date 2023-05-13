<?php

namespace App\Repository;

<<<<<<<< HEAD:src/Repository/PurchaseDetailsRepository.php
use App\Entity\PurchaseDetails;
========
use App\Entity\ShippingDetails;
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Repository/ShippingDetailsRepository.php
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
<<<<<<<< HEAD:src/Repository/PurchaseDetailsRepository.php
 * @extends ServiceEntityRepository<PurchaseDetails>
 *
 * @method PurchaseDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method PurchaseDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method PurchaseDetails[]    findAll()
 * @method PurchaseDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PurchaseDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PurchaseDetails::class);
    }

    public function save(PurchaseDetails $entity, bool $flush = false): void
========
 * @extends ServiceEntityRepository<ShippingDetails>
 *
 * @method ShippingDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShippingDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShippingDetails[]    findAll()
 * @method ShippingDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShippingDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShippingDetails::class);
    }

    public function save(ShippingDetails $entity, bool $flush = false): void
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Repository/ShippingDetailsRepository.php
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

<<<<<<<< HEAD:src/Repository/PurchaseDetailsRepository.php
    public function remove(PurchaseDetails $entity, bool $flush = false): void
========
    public function remove(ShippingDetails $entity, bool $flush = false): void
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Repository/ShippingDetailsRepository.php
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
<<<<<<<< HEAD:src/Repository/PurchaseDetailsRepository.php
//     * @return PurchaseDetails[] Returns an array of PurchaseDetails objects
========
//     * @return ShippingDetails[] Returns an array of ShippingDetails objects
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Repository/ShippingDetailsRepository.php
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

<<<<<<<< HEAD:src/Repository/PurchaseDetailsRepository.php
//    public function findOneBySomeField($value): ?PurchaseDetails
========
//    public function findOneBySomeField($value): ?ShippingDetails
>>>>>>>> 37a5ef554987307b34576f141c9208980cfd5716:src/Repository/ShippingDetailsRepository.php
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
