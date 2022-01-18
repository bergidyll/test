<?php

namespace App\Repository;

use App\Entity\Pflichtstunden;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pflichtstunden|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pflichtstunden|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pflichtstunden[]    findAll()
 * @method Pflichtstunden[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PflichtstundenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pflichtstunden::class);
    }

    /**
     * @return Pflichtstunden[] Returns an array of Rechnungen objects
     */

    public function findAll()
    {
     return $this->createQueryBuilder('g')
         ->orderBy('g.jahr', 'DESC')
         ->getQuery()
         ->getResult()
     ;
    }

    public function findByYear($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.jahr = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findOneByMemberId($value): ?Pflichtstunden
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.mitglieder_id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
