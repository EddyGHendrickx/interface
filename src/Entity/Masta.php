<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MastaRepository")
 */
class Masta
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var transform;
     */
    private $transformation;

    /**
     * Masta constructor.
     * @param transform $transformation
     */
    public function __construct(transform $transformation)
    {
        $this->transformation = $transformation;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function doTheThing(string $input)
    {
        return $this->transformation->doIt($input);
    }
}
