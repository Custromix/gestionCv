<?php

namespace App\Repository;

use App\Entity\CvHobby;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CvHobby|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvHobby|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvHobby[]    findAll()
 * @method CvHobby[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvHobbyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvHobby::class);
    }

    // /**
    //  * @return CvHobby[] Returns an array of CvHobby objects
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
    public function findOneBySomeField($value): ?CvHobby
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
