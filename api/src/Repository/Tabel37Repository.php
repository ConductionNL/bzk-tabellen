<?php

namespace App\Repository;

use App\Entity\Tabel37;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tabel37|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabel37|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabel37[]    findAll()
 * @method Tabel37[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Tabel37Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabel37::class);
    }

    // /**
    //  * @return Tabel37[] Returns an array of Tabel37 objects
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
    public function findOneBySomeField($value): ?Tabel37
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
