<?php

namespace App\Repository;

use App\Entity\Verein;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Verein|null find($id, $lockMode = null, $lockVersion = null)
 * @method Verein|null findOneBy(array $criteria, array $orderBy = null)
 * @method Verein[]    findAll()
 * @method Verein[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VereinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Verein::class);
    }

    public function findOneById(): ?Verein
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.id = :val')
            ->setParameter('val', 1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }



    // /**
    //  * @return Verein[] Returns an array of Verein objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findClubById($value): ?Verein
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
