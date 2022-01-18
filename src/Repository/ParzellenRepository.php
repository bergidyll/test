<?php

namespace App\Repository;

use App\Entity\Parzellen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Parzellen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parzellen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parzellen[]    findAll()
 * @method Parzellen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParzellenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Parzellen::class);
    }

    /**
     * @return Parzellen[] Returns an array of Parzellen objects
     */
    public function findPaechter($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAblesungByParzelle($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.ablesung = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }



    /*
    public function findOneBySomeField($value): ?Parzellen
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
