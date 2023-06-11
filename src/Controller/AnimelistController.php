<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Animelist;
use App\Entity\Subscription;

class AnimelistController extends AbstractController
{
    /**
     * @Route("/animelist", name="app_animelist")
     * @param Request $request
     */
    public function index(Request $request): Response
    {
        $year = $request->query->get('year');
        $season = $request->query->get('season');
        
        // 仮
        if($year == null) $year = '2021';
        if($season == null) $season = 'autumn'; 

        $em = $this->getDoctrine()->getManager(); 
        $animelist = $em->getRepository(Animelist::class)->findFilteredData($year, $season);

        // 英語⇒日本語へ
        $season_ja = self::season_cvt($season);

        return $this->render('animelist/index.html.twig', [
            'controller_name' => 'AnimelistController',
            'animelist' =>  $animelist,
            'year' =>  $year,
            'season_ja' =>  $season_ja,
        ]);
    }

    // 英語⇒日本語への変換
    private static function season_cvt($season){
        switch($season){
            case 'spring':
                $season_ja = '春';
                break;
            case 'summer':
                $season_ja = '夏';
                break;
            case 'autumn':
                $season_ja = '秋';
                break;
            case 'winter':
                $season_ja = '冬';
                break;
        }
        return $season_ja;
    }

}
