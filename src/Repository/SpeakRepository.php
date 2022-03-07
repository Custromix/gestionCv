<?php

namespace App\Repository;

use App\Entity\Speak;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Speak|null find($id, $lockMode = null, $lockVersion = null)
 * @method Speak|null findOneBy(array $criteria, array $orderBy = null)
 * @method Speak[]    findAll()
 * @method Speak[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpeakRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Speak::class);
    }

    // /**
    //  * @return Speak[] Returns an array of Speak objects
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
    public function findOneBySomeField($value): ?Speak
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
