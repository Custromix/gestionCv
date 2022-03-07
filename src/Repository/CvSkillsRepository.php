<?php

namespace App\Repository;

use App\Entity\CvSkills;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CvSkills|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvSkills|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvSkills[]    findAll()
 * @method CvSkills[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvSkillsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvSkills::class);
    }

    // /**
    //  * @return CvSkills[] Returns an array of CvSkills objects
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
    public function findOneBySomeField($value): ?CvSkills
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
