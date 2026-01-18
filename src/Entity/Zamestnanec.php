<?php
// src/Entity/Zamestnanec.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Zamestnanec
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $jmeno;

    #[ORM\ManyToOne(targetEntity: Pobocka::class, inversedBy: 'zamestnanci')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pobocka $pobocka = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJmeno(): string
    {
        return $this->jmeno;
    }

    public function setJmeno(string $jmeno): self
    {
        $this->jmeno = $jmeno;
        return $this;
    }

    public function getPobocka(): ?Pobocka
    {
        return $this->pobocka;
    }

    public function setPobocka(?Pobocka $pobocka): self
    {
        $this->pobocka = $pobocka;
        return $this;
    }
}
