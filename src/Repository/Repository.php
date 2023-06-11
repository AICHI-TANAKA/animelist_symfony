<?php

namespace App\Repository;

use App\Entity\Animelist;
use App\Entity\Subscription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AnimelistRepository2 extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, entityClass::Animelist::class);
        parent::__construct($registry, entityClass::Subscription::class);
    }

    public function findAllAnimeSubsc(string $year, string $season): array
    {

    }
}