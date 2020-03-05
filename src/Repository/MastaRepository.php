<?php

namespace App\Repository;

use App\Entity\Masta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Masta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Masta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Masta[]    findAll()
 * @method Masta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MastaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Masta::class);
    }

    // /**
    //  * @return Masta[] Returns an array of Masta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Masta
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
