<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Animelist;

class AnimelistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animelist::class);
    }

    public function findFilteredData(string $year, string $season)
    {
        return $this->createQueryBuilder('a')
            ->join('a.entitySubscription', 'b')
            ->where('a.id = b.id')
            ->andwhere('a.year = :filter1')
            ->andWhere('a.season = :filter2')
            ->setParameter('filter1', $year)
            ->setParameter('filter2', $season)
            ->getQuery()
            ->getResult();
    }
}