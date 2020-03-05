<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\transform;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RemoveSpacesRepository")
 */
class RemoveSpaces implements transform
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
           if ($char === " "){
               $newStr .= "-";
           } else {
               $newStr .= $char;
           }
        }
        return $newStr;
    }
}
