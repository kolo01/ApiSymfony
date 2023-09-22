<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
#[ApiResource]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NomFournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $addresse = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroFourn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->NomFournisseur;
    }

    public function setNomFournisseur(string $NomFournisseur): static
    {
        $this->NomFournisseur = $NomFournisseur;

        return $this;
    }

    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(string $addresse): static
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getNumeroFourn(): ?string
    {
        return $this->numeroFourn;
    }

    public function setNumeroFourn(string $numeroFourn): static
    {
        $this->numeroFourn = $numeroFourn;

        return $this;
    }
}
