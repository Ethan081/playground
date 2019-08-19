<?php

namespace App\Repository;

use App\Entity\AgeSuitability;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AgeSuitability|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgeSuitability|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgeSuitability[]    findAll()
 * @method AgeSuitability[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgeSuitabilityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AgeSuitability::class);
    }

    // /**
    //  * @return AgeSuitability[] Returns an array of AgeSuitability objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgeSuitability
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
