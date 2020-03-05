<?php

namespace App\Controller;

use App\Entity\Capitalize;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use App\Entity\RemoveSpaces;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ManipulateStringsController extends AbstractController
{
    /**
     * @Route("/manipulate", name="manipulate_strings")
     */
    public function index()
    {
        $capitalise = new Capitalize();
        $dashilise = new RemoveSpaces();
        $logger = new Logger("logger");
        $logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/log.info', Logger::INFO));

        return $this->render('manipulate_strings/index.html.twig', [
            'controller_name' => 'ManipulateStringsController',
            'theString' => $capitalise->doIt($_POST['input'] ?? ""),
            'spaceLess' => $dashilise->doIt($_POST['input'] ?? "")
        ]);
    }
}
