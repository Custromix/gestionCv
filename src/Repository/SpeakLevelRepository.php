<?php

namespace App\Repository;

use App\Entity\SpeakLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SpeakLevel|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpeakLevel|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpeakLevel[]    findAll()
 * @method SpeakLevel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpeakLevelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpeakLevel::class);
    }

    // /**
    //  * @return SpeakLevel[] Returns an array of SpeakLevel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SpeakLevel
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
