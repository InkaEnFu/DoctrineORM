<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Sklad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $nazev = null;

    #[ORM\Column(length: 255)]
    private ?string $adresa = null;

    #[ORM\Column]
    private ?int $kapacita = null;

    #[ORM\Column]
    private bool $klimatizovany = false;

    #[ORM\Column(type: 'decimal', precision: 6, scale: 2)]
    private string $teplotaC = '20.00';

    #[ORM\Column]
    private ?\DateTimeImmutable $posledniInventura = null;

    public function getId(): ?int { return $this->id; }

    public function getNazev(): ?string { return $this->nazev; }
    public function setNazev(string $nazev): static { $this->nazev = $nazev; return $this; }

    public function getAdresa(): ?string { return $this->adresa; }
    public function setAdresa(string $adresa): static { $this->adresa = $adresa; return $this; }

    public function getKapacita(): ?int { return $this->kapacita; }
    public function setKapacita(int $kapacita): static { $this->kapacita = $kapacita; return $this; }

    public function isKlimatizovany(): bool { return $this->klimatizovany; }
    public function setKlimatizovany(bool $klimatizovany): static { $this->klimatizovany = $klimatizovany; return $this; }

    public function getTeplotaC(): string { return $this->teplotaC; }
    public function setTeplotaC(string $teplotaC): static { $this->teplotaC = $teplotaC; return $this; }

    public function getPosledniInventura(): ?\DateTimeImmutable { return $this->posledniInventura; }
    public function setPosledniInventura(?\DateTimeImmutable $posledniInventura): static { $this->posledniInventura = $posledniInventura; return $this; }
}
