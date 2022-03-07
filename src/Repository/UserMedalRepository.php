<?php

namespace App\Repository;

use App\Entity\UserMedal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserMedal|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserMedal|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserMedal[]    findAll()
 * @method UserMedal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserMedalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserMedal::class);
    }

    // /**
    //  * @return UserMedal[] Returns an array of UserMedal objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserMedal
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
