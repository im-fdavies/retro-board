<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RetroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RetroRepository::class)
 */
class Retro
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SprintName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSprintName(): ?string
    {
        return $this->SprintName;
    }

    public function setSprintName(string $SprintName): self
    {
        $this->SprintName = $SprintName;

        return $this;
    }
}
