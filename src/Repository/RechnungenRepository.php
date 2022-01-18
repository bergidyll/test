<?php

namespace App\Repository;

use App\Entity\Rechnungen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rechnungen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rechnungen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rechnungen[]    findAll()
 * @method Rechnungen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RechnungenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rechnungen::class);
    }

    /**
     * @return Rechnungen[] Returns an array of Rechnungen objects
     */
    public function findByInvoiceYear($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.datum = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    public function findOneBySomeField($value): ?Rechnungen
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

}
