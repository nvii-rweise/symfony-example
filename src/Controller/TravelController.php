<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TravelController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render("travelblog/index.html.twig", [
            "title" => "Travelblog"
        ]);
    }

    /**
     * @Route("/days/{dayNumber}")
     */
    public function days(int $dayNumber = null): Response
    {
        $days = [
            ["id" => "1", "title" => "Let's go", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "2", "title" => "Wer braucht schon Fahrbahnmarkierung", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "3", "title" => "Motorkontrollleuchte", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "4", "title" => "Haben wir Diesel getankt", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "5", "title" => "Eishöhlen", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "6", "title" => "Italien wir kommen", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "7", "title" => "Vendig!", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "8", "title" => "Strand", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "9", "title" => "Sonne wir kommen", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."],
            ["id" => "10", "title" => "Slowenien", "text" => "Eu consequat voluptate laborum nostrud consequat in cillum nisi sit est in magna sit. Irure adipisicing eiusmod incididunt adipisicing sint amet Lorem magna cupidatat incididunt proident dolore. Ea voluptate Lorem nisi aliqua enim sint adipisicing do aliqua reprehenderit id id magna."]
        ];

        if (!$dayNumber) {
            return $this->render("travelblog/days.html.twig", [
                "title" => "Alle Tage in der Übersicht",
                "days" => $days
            ]);
        }
        return new Response("Tag: " . $dayNumber);
    }
}