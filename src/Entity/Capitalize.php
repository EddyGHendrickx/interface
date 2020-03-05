<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizeRepository")
 */
class Capitalize implements transform
{
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

    public function doIt(string $input)
    {
        $newStr = '';
        foreach(str_split($input) as $index => $char) {
            $newStr .= ($index % 2) ? strtolower($char) : strtoupper($char);
        }
        return $newStr;
    }
}
