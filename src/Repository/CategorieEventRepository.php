<?php

namespace App\Repository;

use App\Entity\CategorieEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CategorieEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieEvent[]    findAll()
 * @method CategorieEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieEventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CategorieEvent::class);
    }

    // /**
    //  * @return CategorieEvent[] Returns an array of CategorieEvent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategorieEvent
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
