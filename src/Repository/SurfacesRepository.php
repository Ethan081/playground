<?php

namespace App\Repository;

use App\Entity\Surfaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Surfaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method Surfaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method Surfaces[]    findAll()
 * @method Surfaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurfacesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Surfaces::class);
    }

    // /**
    //  * @return Surfaces[] Returns an array of Surfaces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Surfaces
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
