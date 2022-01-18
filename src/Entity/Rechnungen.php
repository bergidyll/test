<?php

namespace App\Entity;

use App\Repository\RechnungenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RechnungenRepository::class)
 */
class Rechnungen
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
    private $datum;

    /**
     * @ORM\ManyToOne(targetEntity=Mitglieder::class, inversedBy="rechnungen")
     */
    private $mitglieder;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rechnungssumme;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $pflichtstunden;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $rechnungsnummer;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $pachtzins;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $rechnungstyp;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $faelligkeitsdatum;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $rechnungsstatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(?\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

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

    public function getRechnungssumme(): ?string
    {
        return $this->rechnungssumme;
    }

    public function setRechnungssumme(?string $rechnungssumme): self
    {
        $this->rechnungssumme = $rechnungssumme;

        return $this;
    }

    public function getPflichtstunden(): ?string
    {
        return $this->pflichtstunden;
    }

    public function setPflichtstunden(?string $pflichtstunden): self
    {
        $this->pflichtstunden = $pflichtstunden;

        return $this;
    }

    public function getRechnungsnummer(): ?string
    {
        return $this->rechnungsnummer;
    }

    public function setRechnungsnummer(?string $rechnungsnummer): self
    {
        $this->rechnungsnummer = $rechnungsnummer;

        return $this;
    }

    public function getPachtzins(): ?string
    {
        return $this->pachtzins;
    }

    public function setPachtzins(?string $pachtzins): self
    {
        $this->pachtzins = $pachtzins;

        return $this;
    }

    public function getRechnungstyp(): ?string
    {
        return $this->rechnungstyp;
    }

    public function setRechnungstyp(?string $rechnungstyp): self
    {
        $this->rechnungstyp = $rechnungstyp;

        return $this;
    }

    public function getFaelligkeitsdatum(): ?\DateTimeInterface
    {
        return $this->faelligkeitsdatum;
    }

    public function setFaelligkeitsdatum(?\DateTimeInterface $faelligkeitsdatum): self
    {
        $this->faelligkeitsdatum = $faelligkeitsdatum;

        return $this;
    }

    public function getRechnungsstatus(): ?string
    {
        return $this->rechnungsstatus;
    }

    public function setRechnungsstatus(?string $rechnungsstatus): self
    {
        $this->rechnungsstatus = $rechnungsstatus;

        return $this;
    }
}
