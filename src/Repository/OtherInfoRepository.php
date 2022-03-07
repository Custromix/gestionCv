<?php

namespace App\Repository;

use App\Entity\OtherInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OtherInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method OtherInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method OtherInfo[]    findAll()
 * @method OtherInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OtherInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OtherInfo::class);
    }

    // /**
    //  * @return OtherInfo[] Returns an array of OtherInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OtherInfo
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
