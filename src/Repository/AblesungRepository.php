<?php

namespace App\Repository;

use App\Entity\Ablesung;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ablesung|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ablesung|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ablesung[]    findAll()
 * @method Ablesung[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AblesungRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ablesung::class);
    }

    /**
     * @return Ablesungen[] Returns an array of Ablesung objects
     */
    public function findByParzelle($value): ?Ablesung
    {
        return $this->createQueryBuilder('r')
            ->andwhere('r.parzelle = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->getQuery()
            ->getResult()

        ;
    }

    public function findByJahr($dateOldFormat, $parzelle): ?Ablesung
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.jahr = :jahr')
            ->andWhere('r.parzelle_id = :parzelle_id')
            ->setParameter('val', $dateOldFormat)
            ->setParameter('val', $parzelle)
            ->getQuery()
            ->getArrayResult()
        ;
    }

    public function findOneByYear($value): ?Ablesung
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.jahr = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }


    public function findAblesungByParzelle($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.parzelle = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->getQuery()
            ->getArrayResult()
        ;
    }





    // /**
    //  * @return Ablesung[] Returns an array of Ablesung objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ablesung
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
