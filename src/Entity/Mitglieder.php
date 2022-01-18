<?php

namespace App\Entity;

use App\Repository\MitgliederRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MitgliederRepository::class)
 */
class Mitglieder
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vorname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nachname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $anrede;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $geburtsdatum;

    /**
     * @ORM\ManyToOne(targetEntity=Parzellen::class, inversedBy="mitglieders")
     */
    private $parzelle;

    /**
     * @ORM\OneToMany(targetEntity=Rechnungen::class, mappedBy="mitglieder")
     */
    private $rechnungen;

    /**
     * @ORM\OneToMany(targetEntity=Pflichtstunden::class, mappedBy="mitglieder")
     */
    private $pflichtstunden;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $strasse;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $plz;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ort;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $funktion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $beruf;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $eintrittsdatum;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $austrittsdatum;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $notiz;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $parkplatz;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $parkplatzanzahl;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $kaution;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zeitungsbezug;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zb_pflichtstunden;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zb_zeitung;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zb_mitgliedsbeitrag;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $mitgliedsnummer;

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
        $this->rechnungen = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getNachname(): ?string
    {
        return $this->nachname;
    }

    public function setNachname(?string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getAnrede(): ?string
    {
        return $this->anrede;
    }

    public function setAnrede(?string $anrede): self
    {
        $this->anrede = $anrede;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(?string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGeburtsdatum(): ?\DateTimeInterface
    {
        return $this->geburtsdatum;
    }

    public function setGeburtsdatum(?\DateTimeInterface $geburtsdatum): self
    {
        $this->geburtsdatum = $geburtsdatum;

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

    /**
     * @return Collection|Rechnungen[]
     */
    public function getRechnungen(): Collection
    {
        return $this->rechnungen;
    }

    public function addRechnungen(Rechnungen $rechnungen): self
    {
        if (!$this->rechnungen->contains($rechnungen)) {
            $this->rechnungen[] = $rechnungen;
            $rechnungen->setMitglieder($this);
        }

        return $this;
    }

    public function removeRechnungen(Rechnungen $rechnungen): self
    {
        if ($this->rechnungen->removeElement($rechnungen)) {
            // set the owning side to null (unless already changed)
            if ($rechnungen->getMitglieder() === $this) {
                $rechnungen->setMitglieder(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Pflichtstunden[]
     */
    public function getPflichtstunden(): Collection
    {
        return $this->pflichtstunden;
    }

    public function addPflichtstunden(Pflichtstunden $pflichtstunden): self
    {
        if (!$this->pflichtstunden->contains($pflichtstunden)) {
            $this->pflichtstunden[] = $pflichtstunden;
            $pflichtstunden->setMitglieder($this);
        }

        return $this;
    }

    public function removePflichtstunden(Rechnungen $pflichtstunden): self
    {
        if ($this->pflichtstunden->removeElement($pflichtstunden)) {
            // set the owning side to null (unless already changed)
            if ($pflichtstunden->getMitglieder() === $this) {
                $pflichtstunden->setMitglieder(null);
            }
        }

        return $this;
    }


    public function getName(): ?string {
        return $this->nachname . ', ' . $this->vorname;
    }

    public function getBeitragsdauer(): ?\DateTimeInterface
    {
        $currentDateTime = new DateTime;
        $dateTimeInTheFuture = new DateTime($this->getEintrittsdatum());

        var_dump($dateTimeInTheFuture); exit;
        $dateInterval = $dateTimeInTheFuture->diff($currentDateTime);
        $totalMonths = 12 * $dateInterval->y + $dateInterval->m;
        return $totalMonths;
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

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): self
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): self
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    public function getFunktion(): ?string
    {
        return $this->funktion;
    }

    public function setFunktion(?string $funktion): self
    {
        $this->funktion = $funktion;

        return $this;
    }

    public function getBeruf(): ?string
    {
        return $this->beruf;
    }

    public function setBeruf(?string $beruf): self
    {
        $this->beruf = $beruf;

        return $this;
    }

    public function getEintrittsdatum(): ?\DateTimeInterface
    {
        return $this->eintrittsdatum;
    }

    public function setEintrittsdatum(?\DateTimeInterface $eintrittsdatum): self
    {
        $this->eintrittsdatum = $eintrittsdatum;

        return $this;
    }

    public function getAustrittsdatum(): ?\DateTimeInterface
    {
        return $this->austrittsdatum;
    }

    public function setAustrittsdatum(?\DateTimeInterface $austrittsdatum): self
    {
        $this->austrittsdatum = $austrittsdatum;

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

    public function getParkplatz(): ?bool
    {
        return $this->parkplatz;
    }

    public function setParkplatz(?bool $parkplatz): self
    {
        $this->parkplatz = $parkplatz;

        return $this;
    }

    public function getParkplatzanzahl(): ?string
    {
        return $this->parkplatzanzahl;
    }

    public function setParkplatzanzahl(?string $parkplatzanzahl): self
    {
        $this->parkplatzanzahl = $parkplatzanzahl;

        return $this;
    }

    public function getKaution(): ?string
    {
        return $this->kaution;
    }

    public function setKaution(?string $kaution): self
    {
        $this->kaution = $kaution;

        return $this;
    }

    public function getZeitungsbezug(): ?bool
    {
        return $this->zeitungsbezug;
    }

    public function setZeitungsbezug(?bool $zeitungsbezug): self
    {
        $this->zeitungsbezug = $zeitungsbezug;

        return $this;
    }

    public function getZbPflichtstunden(): ?bool
    {
        return $this->zb_pflichtstunden;
    }

    public function setZbPflichtstunden(?bool $zb_pflichtstunden): self
    {
        $this->zb_pflichtstunden = $zb_pflichtstunden;

        return $this;
    }

    public function getZbZeitung(): ?bool
    {
        return $this->zb_zeitung;
    }

    public function setZbZeitung(?bool $zb_zeitung): self
    {
        $this->zb_zeitung = $zb_zeitung;

        return $this;
    }

    public function getZbMitgliedsbeitrag(): ?bool
    {
        return $this->zb_mitgliedsbeitrag;
    }

    public function setZbMitgliedsbeitrag(?bool $zb_mitgliedsbeitrag): self
    {
        $this->zb_mitgliedsbeitrag = $zb_mitgliedsbeitrag;

        return $this;
    }

    public function getMitgliedsnummer(): ?string
    {
        return $this->mitgliedsnummer;
    }

    public function setMitgliedsnummer(?string $mitgliedsnummer): self
    {
        $this->mitgliedsnummer = $mitgliedsnummer;

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
