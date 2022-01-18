<?php

namespace App\Entity;

use App\Repository\PflichtstundenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PflichtstundenRepository::class)
 */
class Pflichtstunden
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $jahr;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $anzahl;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $bemerkung;

    /**
     * @ORM\ManyToOne(targetEntity=Mitglieder::class, inversedBy="pflichtstunden")
     */
    private $mitglieder;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJahr(): ?\DateTimeInterface
    {
        return $this->jahr;
    }

    public function setJahr(?\DateTimeInterface $jahr): self
    {
        $this->jahr = $jahr;

        return $this;
    }

    public function getAnzahl(): ?string
    {
        return $this->anzahl;
    }

    public function setAnzahl(?string $anzahl): self
    {
        $this->anzahl = $anzahl;

        return $this;
    }

    public function getBemerkung(): ?string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(?string $bemerkung): self
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }

    public function getMitglieder(): ?Mitglieder
    {
        return $this->mitglieder;
    }

    public function setMitglieder(?Mitglieder $mitglieder): self
    {
        $this->mitglieder = $mitglieder;

        return $this;
    }

}
