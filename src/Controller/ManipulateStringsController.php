<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Masta;
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

        if (isset($_POST['dropDown'])) {
            if ($_POST['dropDown'] == "dash") {
                $masta = new Masta(new RemoveSpaces());
            } else {
                $masta = new Masta(new Capitalize());
            }

            $logger = new Logger("logger");
            $logger->pushHandler(new StreamHandler(__DIR__ . '/logs/log.info', Logger::INFO));
            $logger->info($masta->doTheThing($_POST['input'] ?? ""));

            return $this->render('manipulate_strings/index.html.twig', [
                'controller_name' => 'ManipulateStringsController',
                'theString' => $masta->doTheThing($_POST['input'] ?? ""),
            ]);
        } else {
            return $this->render('manipulate_strings/index.html.twig', [
                'controller_name' => 'ManipulateStringsController',
                'theString' => "",
            ]);
        }
    }
}
