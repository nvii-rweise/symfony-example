<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DayController extends AbstractController
{
    #[Route("/api/days/{id<\d+>}", name: "app_route_api_getDay", methods: ["GET"])]
    public function getDay(int $id, LoggerInterface $logger): Response
    {
        // TODO: in future from database
        $day = [
            "id" => $id,
            "title" => "Let's go!",
            "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."
        ];

        $logger->info("Returning API response for day {song}", [
            "song" => $id
        ]);
        return $this->json($day);
    }
}