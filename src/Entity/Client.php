<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ApiResource]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomClient = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroCLient = null;

    #[ORM\Column(length: 255)]
    private ?string $remarqueClient = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $detteAnterieur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): static
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    public function getNumeroCLient(): ?string
    {
        return $this->numeroCLient;
    }

    public function setNumeroCLient(string $numeroCLient): static
    {
        $this->numeroCLient = $numeroCLient;

        return $this;
    }

    public function getRemarqueClient(): ?string
    {
        return $this->remarqueClient;
    }

    public function setRemarqueClient(string $remarqueClient): static
    {
        $this->remarqueClient = $remarqueClient;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDetteAnterieur(): ?string
    {
        return $this->detteAnterieur;
    }

    public function setDetteAnterieur(string $detteAnterieur): static
    {
        $this->detteAnterieur = $detteAnterieur;

        return $this;
    }
}
