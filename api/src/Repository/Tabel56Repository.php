<?php

namespace App\Repository;

use App\Entity\Tabel56;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tabel56|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabel56|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabel56[]    findAll()
 * @method Tabel56[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Tabel56Repository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabel56::class);
    }

    // /**
    //  * @return Tabel32[] Returns an array of Tabel32 objects
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
    public function findOneBySomeField($value): ?Tabel32
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
