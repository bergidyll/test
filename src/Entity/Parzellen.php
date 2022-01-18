<?php

namespace App\Entity;

use App\Repository\ParzellenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParzellenRepository::class)
 */
class Parzellen
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $nummer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $groesse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bereich;

    /**
     * @ORM\OneToMany(targetEntity=Mitglieder::class, mappedBy="parzelle")
     */
    private $mitglieders;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $paechter_a;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $paechter_p;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $trinkwasser;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $strom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notiz;

    /**
     * @ORM\OneToMany(targetEntity=Ablesung::class, mappedBy="parzelle")
     */
    private $ablesungs;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $createdat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $updatedat;



    public function __construct()
    {
        $this->mitglieders = new ArrayCollection();
        $this->ablesungs = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNummer(): ?string
    {
        return $this->nummer;
    }

    public function setNummer(string $nummer): self
    {
        $this->nummer = $nummer;

        return $this;
    }

    public function getGroesse(): ?string
    {
        return $this->groesse;
    }

    public function setGroesse(?string $groesse): self
    {
        $this->groesse = $groesse;

        return $this;
    }

    public function getBereich(): ?string
    {
        return $this->bereich;
    }

    public function setBereich(?string $bereich): self
    {
        $this->bereich = $bereich;

        return $this;
    }

    /**
     * @return Collection|Mitglieder[]
     */
    public function getMitglieders(): Collection
    {
        return $this->mitglieders;
    }

    public function addMitglieder(Mitglieder $mitglieder): self
    {
        if (!$this->mitglieders->contains($mitglieder)) {
            $this->mitglieders[] = $mitglieder;
            $mitglieder->setParzelle($this);
        }

        return $this;
    }

    public function removeMitglieder(Mitglieder $mitglieder): self
    {
        if ($this->mitglieders->removeElement($mitglieder)) {
            // set the owning side to null (unless already changed)
            if ($mitglieder->getParzelle() === $this) {
                $mitglieder->setParzelle(null);
            }
        }

        return $this;
    }

    public function getPaechterA(): ?string
    {
        return $this->paechter_a;
    }

    public function setPaechterA(?string $paechter_a): self
    {
        $this->paechter_a = $paechter_a;

        return $this;
    }

    public function getPaechterP(): ?string
    {
        return $this->paechter_p;
    }

    public function setPaechterP(?string $paechter_p): self
    {
        $this->paechter_p = $paechter_p;

        return $this;
    }

    public function getTrinkwasser(): ?bool
    {
        return $this->trinkwasser;
    }

    public function setTrinkwasser(?bool $trinkwasser): self
    {
        $this->trinkwasser = $trinkwasser;

        return $this;
    }

    public function getStrom(): ?bool
    {
        return $this->strom;
    }

    public function setStrom(?bool $strom): self
    {
        $this->strom = $strom;

        return $this;
    }

    public function getNotiz(): ?string
    {
        return $this->notiz;
    }

    public function setNotiz(?string $notiz): self
    {
        $this->notiz = $notiz;

        return $this;
    }

    /**
     * @return Collection|Ablesung[]
     */
    public function getAblesungs(): Collection
    {
        return $this->ablesungs;
    }

    public function addAblesung(Ablesung $ablesung): self
    {
        if (!$this->ablesungs->contains($ablesung)) {
            $this->ablesungs[] = $ablesung;
            $ablesung->setParzelle($this);
        }

        return $this;
    }

    public function removeAblesung(Ablesung $ablesung): self
    {
        if ($this->ablesungs->removeElement($ablesung)) {
            // set the owning side to null (unless already changed)
            if ($ablesung->getParzelle() === $this) {
                $ablesung->setParzelle(null);
            }
        }

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedat(): ?\DateTimeInterface
    {
        return $this->createdat;
    }

    public function setCreatedat(\DateTimeInterface $createdat): self
    {
        $this->createdat = $createdat;

        return $this;
    }

    public function getUpdatedat(): ?\DateTimeInterface
    {
        return $this->updatedat;
    }

    public function setUpdatedat(\DateTimeInterface $updatedat): self
    {
        $this->updatedat = $updatedat;

        return $this;
    }
}
