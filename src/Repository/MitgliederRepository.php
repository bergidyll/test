<?php

namespace App\Repository;

use App\Entity\Mitglieder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mitglieder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mitglieder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mitglieder[]    findAll()
 * @method Mitglieder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MitgliederRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mitglieder::class);
    }

    /**
     * @return Mitglieder[] Returns an array of Mitglieder objects
     */
    public function findOneBySomeField($value): ?Mitglieder
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findByGartennummer(int $parzelle): ?Mitglieder
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM mitglieder p
            WHERE p.parzelle > :parzelle
            ORDER BY p.parzelle ASC
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['parzelle' => $parzelle]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();

    }

}
