<?php

namespace App\Repository;

use App\Entity\UserLicence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserLicence|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserLicence|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserLicence[]    findAll()
 * @method UserLicence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserLicenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserLicence::class);
    }

    // /**
    //  * @return UserLicence[] Returns an array of UserLicence objects
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
    public function findOneBySomeField($value): ?UserLicence
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
