<?php

namespace App\Repository;

use App\Entity\RemoveSpaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RemoveSpaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method RemoveSpaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method RemoveSpaces[]    findAll()
 * @method RemoveSpaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemoveSpacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RemoveSpaces::class);
    }

    // /**
    //  * @return RemoveSpaces[] Returns an array of RemoveSpaces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RemoveSpaces
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
