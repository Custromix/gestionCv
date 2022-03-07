<?php

namespace App\Repository;

use App\Entity\Medal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Medal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Medal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Medal[]    findAll()
 * @method Medal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Medal::class);
    }

    // /**
    //  * @return Medal[] Returns an array of Medal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Medal
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
