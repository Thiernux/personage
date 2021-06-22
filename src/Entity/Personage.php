<?php

namespace App\Entity;

use App\Repository\PersonageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonageRepository::class)
 */
class Personage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="integer")
     */
    private $old;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="array")
     */
    private $carac = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getOld(): ?int
    {
        return $this->old;
    }

    public function setOld(int $old): self
    {
        $this->old = $old;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCarac(): ?array
    {
        return $this->carac;
    }

    public function setCarac(array $carac): self
    {
        $this->carac = $carac;

        return $this;
    }
}
