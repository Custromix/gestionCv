<?php

namespace App\Repository;

use App\Entity\CvContract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CvContract|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvContract|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvContract[]    findAll()
 * @method CvContract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvContractRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvContract::class);
    }

    // /**
    //  * @return CvContract[] Returns an array of CvContract objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CvContract
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
