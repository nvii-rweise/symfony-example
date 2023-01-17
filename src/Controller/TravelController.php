<?php

namespace App\Controller;

use App\Entity\Days;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Cache\CacheItemInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;

class TravelController extends AbstractController
{
    #[Route("/", name: "app_route_index")]
    public function index(ManagerRegistry $doctrine): Response
    {
        $days = $this->getDays($doctrine);
        return $this->render("travelblog/index.html.twig", [
            "title" => "Reiseblog",
            "days" => $days
        ]);
    }

    #[Route("/day/{dayNumber}", name: "app_route_day")]
    public function day(ManagerRegistry $doctrine, int $dayNumber): Response
    {
        $days = $this->getDays($doctrine);
        $nextDay = count($days) === $dayNumber ? 0 : $dayNumber + 1;
        $prevDay = $dayNumber === 1 ? 0 : $dayNumber - 1;
        $day = $days[$dayNumber - 1];
        if ($dayNumber) {
            return $this->render("travelblog/day.html.twig", [
                "title" => "Tag " . $dayNumber,
                "day" => $day,
                "nextDayNumber" => $nextDay,
                "prevDayNumber" => $prevDay
            ]);
        }
    }

    private function getDays(ManagerRegistry $doctrine): array
    {
        $entityManager = $doctrine->getManager();
        $oDays = $entityManager->getRepository(Days::class)->findAll();
        return $oDays;
    }
}