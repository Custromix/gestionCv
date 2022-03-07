<?php

namespace App\Repository;

use App\Entity\EstablishementDegree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EstablishementDegree|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstablishementDegree|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstablishementDegree[]    findAll()
 * @method EstablishementDegree[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstablishementDegreeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstablishementDegree::class);
    }

    // /**
    //  * @return EstablishementDegree[] Returns an array of EstablishementDegree objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EstablishementDegree
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
