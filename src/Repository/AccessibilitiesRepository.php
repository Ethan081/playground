<?php

namespace App\Repository;

use App\Entity\Accessibilities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Accessibilities|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accessibilities|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accessibilities[]    findAll()
 * @method Accessibilities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessibilitiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Accessibilities::class);
    }

    // /**
    //  * @return Accessibilities[] Returns an array of Accessibilities objects
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
    public function findOneBySomeField($value): ?Accessibilities
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
