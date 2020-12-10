<?php

namespace App\Repository;

use App\Entity\Tabel55;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tabel55|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tabel55|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tabel55[]    findAll()
 * @method Tabel55[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Tabel55Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tabel55::class);
    }
}
