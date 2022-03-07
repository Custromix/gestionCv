<?php

namespace App\Repository;

use App\Entity\TypeDegrees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeDegrees|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDegrees|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDegrees[]    findAll()
 * @method TypeDegrees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDegreesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDegrees::class);
    }

    // /**
    //  * @return TypeDegrees[] Returns an array of TypeDegrees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeDegrees
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
