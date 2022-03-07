<?php

namespace App\Repository;

use App\Entity\ToGet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ToGet|null find($id, $lockMode = null, $lockVersion = null)
 * @method ToGet|null findOneBy(array $criteria, array $orderBy = null)
 * @method ToGet[]    findAll()
 * @method ToGet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToGetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToGet::class);
    }

    // /**
    //  * @return ToGet[] Returns an array of ToGet objects
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
    public function findOneBySomeField($value): ?ToGet
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
