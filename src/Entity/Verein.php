<?php

namespace App\Entity;

use App\Repository\VereinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VereinRepository::class)
 */
class Verein
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $gruendungsdatum;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $anschrift;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $plz;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ort;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $register;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $registernummer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $registergericht;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bank;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iban;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $steuernummer;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $mitgliedsbeitrag_aktiv;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $mitgliedsbeitrag_passiv;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $pflichtstundensoll;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $gartenpacht;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $parkplatzpacht;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $beitraglandesverband;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $beitragbundesverband;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $beitragregionalverband;

    /**
     * @ORM\Column(type="decimal", precision=30, scale=2, nullable=true)
     */
    private $gesamtflaeche;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $pflichtstundenbetrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $kautionsbetrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $zeitungsbetrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $grundpreis_strom;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $grundpreis_wasser;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fixkosten_strom;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fixkosten_wasser;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $betrag_stromzaehlertausch;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $betrag_wasserzaehlertausch;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vers_1;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $vers_1_betrag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vers_2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $vers_2_betrag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vers_3;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $vers_3_betrag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vers_4;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $vers_4_betrag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vers_5;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $vers_5_betrag;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $umlage_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $umlage_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $umlage_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $umlage_4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $umlage_5;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $umlage_1_betrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $umlage_2_betrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $umlage_3_betrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $umlage_4_betrag;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $umlage_5_betrag;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGruendungsdatum(): ?\DateTimeInterface
    {
        return $this->gruendungsdatum;
    }

    public function setGruendungsdatum(?\DateTimeInterface $gruendungsdatum): self
    {
        $this->gruendungsdatum = $gruendungsdatum;

        return $this;
    }

    public function getAnschrift(): ?string
    {
        return $this->anschrift;
    }

    public function setAnschrift(?string $anschrift): self
    {
        $this->anschrift = $anschrift;

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

    public function getRegister(): ?string
    {
        return $this->register;
    }

    public function setRegister(?string $register): self
    {
        $this->register = $register;

        return $this;
    }

    public function getRegisternummer(): ?string
    {
        return $this->registernummer;
    }

    public function setRegisternummer(?string $registernummer): self
    {
        $this->registernummer = $registernummer;

        return $this;
    }

    public function getRegistergericht(): ?string
    {
        return $this->registergericht;
    }

    public function setRegistergericht(?string $registergericht): self
    {
        $this->registergericht = $registergericht;

        return $this;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): self
    {
        $this->bank = $bank;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getSteuernummer(): ?string
    {
        return $this->steuernummer;
    }

    public function setSteuernummer(?string $steuernummer): self
    {
        $this->steuernummer = $steuernummer;

        return $this;
    }

    public function getMitgliedsbeitragAktiv(): ?string
    {
        return $this->mitgliedsbeitrag_aktiv;
    }

    public function setMitgliedsbeitragAktiv(?string $mitgliedsbeitrag_aktiv): self
    {
        $this->mitgliedsbeitrag_aktiv = $mitgliedsbeitrag_aktiv;

        return $this;
    }

    public function getMitgliedsbeitragPassiv(): ?string
    {
        return $this->mitgliedsbeitrag_passiv;
    }

    public function setMitgliedsbeitragPassiv(?string $mitgliedsbeitrag_passiv): self
    {
        $this->mitgliedsbeitrag_passiv = $mitgliedsbeitrag_passiv;

        return $this;
    }

    public function getPflichtstundensoll(): ?string
    {
        return $this->pflichtstundensoll;
    }

    public function setPflichtstundensoll(?string $pflichtstundensoll): self
    {
        $this->pflichtstundensoll = $pflichtstundensoll;

        return $this;
    }

    public function getGartenpacht(): ?string
    {
        return $this->gartenpacht;
    }

    public function setGartenpacht(?string $gartenpacht): self
    {
        $this->gartenpacht = $gartenpacht;

        return $this;
    }

    public function getParkplatzpacht(): ?string
    {
        return $this->parkplatzpacht;
    }

    public function setParkplatzpacht(?string $parkplatzpacht): self
    {
        $this->parkplatzpacht = $parkplatzpacht;

        return $this;
    }

    public function getBeitraglandesverband(): ?string
    {
        return $this->beitraglandesverband;
    }

    public function setBeitraglandesverband(?string $beitraglandesverband): self
    {
        $this->beitraglandesverband = $beitraglandesverband;

        return $this;
    }

    public function getBeitragbundesverband(): ?string
    {
        return $this->beitragbundesverband;
    }

    public function setBeitragbundesverband(?string $beitragbundesverband): self
    {
        $this->beitragbundesverband = $beitragbundesverband;

        return $this;
    }

    public function getBeitragregionalverband(): ?string
    {
        return $this->beitragregionalverband;
    }

    public function setBeitragregionalverband(?string $beitragregionalverband): self
    {
        $this->beitragregionalverband = $beitragregionalverband;

        return $this;
    }

    public function getGesamtflaeche(): ?string
    {
        return $this->gesamtflaeche;
    }

    public function setGesamtflaeche(?string $gesamtflaeche): self
    {
        $this->gesamtflaeche = $gesamtflaeche;

        return $this;
    }

    public function getPflichtstundenbetrag(): ?string
    {
        return $this->pflichtstundenbetrag;
    }

    public function setPflichtstundenbetrag(?string $pflichtstundenbetrag): self
    {
        $this->pflichtstundenbetrag = $pflichtstundenbetrag;

        return $this;
    }

    public function getKautionsbetrag(): ?string
    {
        return $this->kautionsbetrag;
    }

    public function setKautionsbetrag(?string $kautionsbetrag): self
    {
        $this->kautionsbetrag = $kautionsbetrag;

        return $this;
    }

    public function getZeitungsbetrag(): ?string
    {
        return $this->zeitungsbetrag;
    }

    public function setZeitungsbetrag(?string $zeitungsbetrag): self
    {
        $this->zeitungsbetrag = $zeitungsbetrag;

        return $this;
    }

    public function getGrundpreisStrom(): ?string
    {
        return $this->grundpreis_strom;
    }

    public function setGrundpreisStrom(?string $grundpreis_strom): self
    {
        $this->grundpreis_strom = $grundpreis_strom;

        return $this;
    }

    public function getGrundpreisWasser(): ?string
    {
        return $this->grundpreis_wasser;
    }

    public function setGrundpreisWasser(?string $grundpreis_wasser): self
    {
        $this->grundpreis_wasser = $grundpreis_wasser;

        return $this;
    }

    public function getFixkostenStrom(): ?string
    {
        return $this->fixkosten_strom;
    }

    public function setFixkostenStrom(?string $fixkosten_strom): self
    {
        $this->fixkosten_strom = $fixkosten_strom;

        return $this;
    }

    public function getFixkostenWasser(): ?string
    {
        return $this->fixkosten_wasser;
    }

    public function setFixkostenWasser(?string $fixkosten_wasser): self
    {
        $this->fixkosten_wasser = $fixkosten_wasser;

        return $this;
    }

    public function getBetragStromzaehlertausch(): ?string
    {
        return $this->betrag_stromzaehlertausch;
    }

    public function setBetragStromzaehlertausch(?string $betrag_stromzaehlertausch): self
    {
        $this->betrag_stromzaehlertausch = $betrag_stromzaehlertausch;

        return $this;
    }

    public function getBetragWasserzaehlertausch(): ?string
    {
        return $this->betrag_wasserzaehlertausch;
    }

    public function setBetragWasserzaehlertausch(?string $betrag_wasserzaehlertausch): self
    {
        $this->betrag_wasserzaehlertausch = $betrag_wasserzaehlertausch;

        return $this;
    }

    public function getVers1(): ?string
    {
        return $this->vers_1;
    }

    public function setVers1(?string $vers_1): self
    {
        $this->vers_1 = $vers_1;

        return $this;
    }

    public function getVers1Betrag(): ?string
    {
        return $this->vers_1_betrag;
    }

    public function setVers1Betrag(?string $vers_1_betrag): self
    {
        $this->vers_1_betrag = $vers_1_betrag;

        return $this;
    }

    public function getVers2(): ?string
    {
        return $this->vers_2;
    }

    public function setVers2(?string $vers_2): self
    {
        $this->vers_2 = $vers_2;

        return $this;
    }

    public function getVers2Betrag(): ?string
    {
        return $this->vers_2_betrag;
    }

    public function setVers2Betrag(?string $vers_2_betrag): self
    {
        $this->vers_2_betrag = $vers_2_betrag;

        return $this;
    }

    public function getVers3(): ?string
    {
        return $this->vers_3;
    }

    public function setVers3(?string $vers_3): self
    {
        $this->vers_3 = $vers_3;

        return $this;
    }

    public function getVers3Betrag(): ?string
    {
        return $this->vers_3_betrag;
    }

    public function setVers3Betrag(?string $vers_3_betrag): self
    {
        $this->vers_3_betrag = $vers_3_betrag;

        return $this;
    }

    public function getVers4(): ?string
    {
        return $this->vers_4;
    }

    public function setVers4(?string $vers_4): self
    {
        $this->vers_4 = $vers_4;

        return $this;
    }

    public function getVers4Betrag(): ?string
    {
        return $this->vers_4_betrag;
    }

    public function setVers4Betrag(?string $vers_4_betrag): self
    {
        $this->vers_4_betrag = $vers_4_betrag;

        return $this;
    }

    public function getVers5(): ?string
    {
        return $this->vers_5;
    }

    public function setVers5(?string $vers_5): self
    {
        $this->vers_5 = $vers_5;

        return $this;
    }

    public function getVers5Betrag(): ?string
    {
        return $this->vers_5_betrag;
    }

    public function setVers5Betrag(?string $vers_5_betrag): self
    {
        $this->vers_5_betrag = $vers_5_betrag;

        return $this;
    }

    public function getUmlage1(): ?string
    {
        return $this->umlage_1;
    }

    public function setUmlage1(?string $umlage_1): self
    {
        $this->umlage_1 = $umlage_1;

        return $this;
    }

    public function getUmlage2(): ?string
    {
        return $this->umlage_2;
    }

    public function setUmlage2(?string $umlage_2): self
    {
        $this->umlage_2 = $umlage_2;

        return $this;
    }

    public function getUmlage3(): ?string
    {
        return $this->umlage_3;
    }

    public function setUmlage3(?string $umlage_3): self
    {
        $this->umlage_3 = $umlage_3;

        return $this;
    }

    public function getUmlage4(): ?string
    {
        return $this->umlage_4;
    }

    public function setUmlage4(?string $umlage_4): self
    {
        $this->umlage_4 = $umlage_4;

        return $this;
    }

    public function getUmlage5(): ?string
    {
        return $this->umlage_5;
    }

    public function setUmlage5(string $umlage_5): self
    {
        $this->umlage_5 = $umlage_5;

        return $this;
    }

    public function getUmlage1Betrag(): ?string
    {
        return $this->umlage_1_betrag;
    }

    public function setUmlage1Betrag(?string $umlage_1_betrag): self
    {
        $this->umlage_1_betrag = $umlage_1_betrag;

        return $this;
    }

    public function getUmlage2Betrag(): ?string
    {
        return $this->umlage_2_betrag;
    }

    public function setUmlage2Betrag(?string $umlage_2_betrag): self
    {
        $this->umlage_2_betrag = $umlage_2_betrag;

        return $this;
    }

    public function getUmlage3Betrag(): ?string
    {
        return $this->umlage_3_betrag;
    }

    public function setUmlage3Betrag(?string $umlage_3_betrag): self
    {
        $this->umlage_3_betrag = $umlage_3_betrag;

        return $this;
    }

    public function getUmlage4Betrag(): ?string
    {
        return $this->umlage_4_betrag;
    }

    public function setUmlage4Betrag(?string $umlage_4_betrag): self
    {
        $this->umlage_4_betrag = $umlage_4_betrag;

        return $this;
    }

    public function getUmlage5Betrag(): ?string
    {
        return $this->umlage_5_betrag;
    }

    public function setUmlage5Betrag(?string $umlage_5_betrag): self
    {
        $this->umlage_5_betrag = $umlage_5_betrag;

        return $this;
    }
}
