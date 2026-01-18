<?php

namespace App\Entity;

use App\Repository\PobockaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PobockaRepository::class)]
class Pobocka
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $cisloPopisne = null;

    #[ORM\Column(length: 255)]
    private ?string $ulice = null;

    #[ORM\Column(length: 255)]
    private ?string $mesto = null;

    #[ORM\Column(length: 2)]
    private ?string $kodZeme = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $jmenoVedouciho = null;

    #[ORM\OneToMany(targetEntity: Zamestnanec::class, mappedBy: 'pobocka')]
    private Collection $zamestnanci;

    public function __construct()
    {
        $this->zamestnanci = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCisloPopisne(): ?int
    {
        return $this->cisloPopisne;
    }

    public function setCisloPopisne(int $cisloPopisne): static
    {
        $this->cisloPopisne = $cisloPopisne;

        return $this;
    }

    public function getUlice(): ?string
    {
        return $this->ulice;
    }

    public function setUlice(string $ulice): static
    {
        $this->ulice = $ulice;

        return $this;
    }

    public function getMesto(): ?string
    {
        return $this->mesto;
    }

    public function setMesto(string $mesto): static
    {
        $this->mesto = $mesto;

        return $this;
    }

    public function getKodZeme(): ?string
    {
        return $this->kodZeme;
    }

    public function setKodZeme(string $kodZeme): static
    {
        $this->kodZeme = $kodZeme;

        return $this;
    }

    public function getJmenoVedouciho(): ?string
    {
        return $this->jmenoVedouciho;
    }

    public function setJmenoVedouciho(?string $jmenoVedouciho): static
    {
        $this->jmenoVedouciho = $jmenoVedouciho;

        return $this;
    }

    public function getZamestnanci(): Collection
    {
        return $this->zamestnanci;
    }

    public function addZamestnanec(Zamestnanec $zamestnanec): static
    {
        if (!$this->zamestnanci->contains($zamestnanec)) {
            $this->zamestnanci->add($zamestnanec);
            $zamestnanec->setPobocka($this);
        }

        return $this;
    }

    public function removeZamestnanec(Zamestnanec $zamestnanec): static
    {
        if ($this->zamestnanci->removeElement($zamestnanec)) {
            if ($zamestnanec->getPobocka() === $this) {
                $zamestnanec->setPobocka(null);
            }
        }

        return $this;
    }
}
