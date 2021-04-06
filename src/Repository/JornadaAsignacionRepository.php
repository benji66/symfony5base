<?php

namespace App\Repository;

use App\Entity\JornadaAsignacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JornadaAsignacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method JornadaAsignacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method JornadaAsignacion[]    findAll()
 * @method JornadaAsignacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JornadaAsignacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JornadaAsignacion::class);
    }

    // /**
    //  * @return JornadaAsignacion[] Returns an array of JornadaAsignacion objects
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
    public function findOneBySomeField($value): ?JornadaAsignacion
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
