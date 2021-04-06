<?php

namespace App\Repository;

use App\Entity\JornadaData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JornadaData|null find($id, $lockMode = null, $lockVersion = null)
 * @method JornadaData|null findOneBy(array $criteria, array $orderBy = null)
 * @method JornadaData[]    findAll()
 * @method JornadaData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JornadaDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JornadaData::class);
    }

    // /**
    //  * @return JornadaData[] Returns an array of JornadaData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JornadaData
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
