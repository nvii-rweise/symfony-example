<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return new Response("Title: Travelblog");
    }

    /**
     * @Route("/days/{dayNumber}")
     */
    public function day(int $dayNumber = null): Response
    {
        if (!$dayNumber) {
            return new Response("Übersicht über alle Tage");
        }
        return new Response("Tag: " . $dayNumber);
    }
}