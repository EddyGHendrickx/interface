<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Monolog\Logger;

use App\Entity\transform;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoggerRepository")
 */
class LoggerClass
{

    private $logger;

    function __construct()
    {
        $this->logger = new Logger("dendieje");
    }

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Logger
     */
    public function getLogger(): Logger
    {
        return $this->logger;
    }

}
