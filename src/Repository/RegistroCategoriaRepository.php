<?php

namespace App\Repository;

use App\Entity\RegistroCategoria ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedRegistroCategoriaException;


/**
 * @method RegistroCategoria|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegistroCategoria|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegistroCategoria[]    findAll()
 * @method RegistroCategoria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegistroCategoriaRepository extends ServiceEntityRepository 
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegistroCategoria::class);
    }

   
    // /**
    //  * @return RegistroCategoria[] Returns an array of RegistroCategoria objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegistroCategoria
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
