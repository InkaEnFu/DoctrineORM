<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Produkt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 120)]
    private ?string $nazev = null;

    #[ORM\Column(length: 64, unique: true)]
    private ?string $sku = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private string $cena = '0.00';

    #[ORM\Column]
    private ?int $pocetKusu = null;

    #[ORM\Column]
    private bool $aktivni = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $vytvoreno = null;

    public function __construct()
    {
        $this->vytvoreno = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getNazev(): ?string { return $this->nazev; }
    public function setNazev(string $nazev): static { $this->nazev = $nazev; return $this; }

    public function getSku(): ?string { return $this->sku; }
    public function setSku(string $sku): static { $this->sku = $sku; return $this; }

    public function getCena(): string { return $this->cena; }
    public function setCena(string $cena): static { $this->cena = $cena; return $this; }

    public function getPocetKusu(): ?int { return $this->pocetKusu; }
    public function setPocetKusu(int $pocetKusu): static { $this->pocetKusu = $pocetKusu; return $this; }

    public function isAktivni(): bool { return $this->aktivni; }
    public function setAktivni(bool $aktivni): static { $this->aktivni = $aktivni; return $this; }

    public function getVytvoreno(): ?\DateTimeImmutable { return $this->vytvoreno; }
    public function setVytvoreno(\DateTimeImmutable $vytvoreno): static { $this->vytvoreno = $vytvoreno; return $this; }
}
