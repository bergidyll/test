<?php

namespace App\Entity;

use App\Repository\AblesungRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AblesungRepository::class)
 */
class Ablesung
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $jahr;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $stromzaehlernummer;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $stromzaehlerstand;

    /**
     * @ORM\ManyToOne(targetEntity=Parzellen::class, inversedBy="ablesungs")
     */
    private $parzelle;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $stromdiff;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stromzaehlertausch;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $stromzaehlerstand_alt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $stromzaehlernummer_alt;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $wasserstand_alt;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $wasserstand;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $wasserzaehlernummer_alt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $wasserzaehlernummer;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $wasserdiff;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $wasserzaehlertausch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJahr(): ?string
    {
        return $this->jahr;
    }

    public function setJahr(?string $jahr): self
    {
        $this->jahr = $jahr;

        return $this;
    }

    public function getStromzaehlernummer(): ?string
    {
        return $this->stromzaehlernummer;
    }

    public function setStromzaehlernummer(?string $stromzaehlernummer): self
    {
        $this->stromzaehlernummer = $stromzaehlernummer;

        return $this;
    }

    public function getStromzaehlerstand(): ?string
    {
        return $this->stromzaehlerstand;
    }

    public function setStromzaehlerstand(?string $stromzaehlerstand): self
    {
        $this->stromzaehlerstand = $stromzaehlerstand;

        return $this;
    }

    public function getParzelle(): ?Parzellen
    {
        return $this->parzelle;
    }

    public function setParzelle(?Parzellen $parzelle): self
    {
        $this->parzelle = $parzelle;

        return $this;
    }

    public function getStromdiff(): ?string
    {
        return $this->stromdiff;
    }

    public function setStromdiff(?string $stromdiff): self
    {
        $this->stromdiff = $stromdiff;

        return $this;
    }

    public function getStromzaehlertausch(): ?bool
    {
        return $this->stromzaehlertausch;
    }

    public function setStromzaehlertausch(?bool $stromzaehlertausch): self
    {
        $this->stromzaehlertausch = $stromzaehlertausch;

        return $this;
    }

    public function getStromzaehlerstandAlt(): ?string
    {
        return $this->stromzaehlerstand_alt;
    }

    public function setStromzaehlerstandAlt(?string $stromzaehlerstand_alt): self
    {
        $this->stromzaehlerstand_alt = $stromzaehlerstand_alt;

        return $this;
    }

    public function getStromzaehlernummerAlt(): ?string
    {
        return $this->stromzaehlernummer_alt;
    }

    public function setStromzaehlernummerAlt(?string $stromzaehlernummer_alt): self
    {
        $this->stromzaehlernummer_alt = $stromzaehlernummer_alt;

        return $this;
    }

    public function getWasserstandAlt(): ?string
    {
        return $this->wasserstand_alt;
    }

    public function setWasserstandAlt(?string $wasserstand_alt): self
    {
        $this->wasserstand_alt = $wasserstand_alt;

        return $this;
    }

    public function getWasserstand(): ?string
    {
        return $this->wasserstand;
    }

    public function setWasserstand(?string $wasserstand): self
    {
        $this->wasserstand = $wasserstand;

        return $this;
    }

    public function getWasserzaehlernummerAlt(): ?string
    {
        return $this->wasserzaehlernummer_alt;
    }

    public function setWasserzaehlernummerAlt(?string $wasserzaehlernummer_alt): self
    {
        $this->wasserzaehlernummer_alt = $wasserzaehlernummer_alt;

        return $this;
    }

    public function getWasserzaehlernummer(): ?string
    {
        return $this->wasserzaehlernummer;
    }

    public function setWasserzaehlernummer(?string $wasserzaehlernummer): self
    {
        $this->wasserzaehlernummer = $wasserzaehlernummer;

        return $this;
    }

    public function getWasserdiff(): ?string
    {
        return $this->wasserdiff;
    }

    public function setWasserdiff(?string $wasserdiff): self
    {
        $this->wasserdiff = $wasserdiff;

        return $this;
    }

    public function getWasserzaehlertausch(): ?bool
    {
        return $this->wasserzaehlertausch;
    }

    public function setWasserzaehlertausch(?bool $wasserzaehlertausch): self
    {
        $this->wasserzaehlertausch = $wasserzaehlertausch;

        return $this;
    }


}
