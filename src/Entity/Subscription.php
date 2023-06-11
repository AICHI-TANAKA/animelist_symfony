<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table(name="subscription")
 * @ORM\Entity
 */
class Subscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amazon", type="text", length=65535, nullable=true)
     */
    private $amazon;

    // /**
    //  * @var string|null
    //  *
    //  * @ORM\Column(name="u-next", type="text", length=65535, nullable=true)
    //  */
    // private $uNext;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hulu", type="text", length=65535, nullable=true)
     */
    private $hulu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="netflix", type="text", length=65535, nullable=true)
     */
    private $netflix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="watcha", type="text", length=65535, nullable=true)
     */
    private $watcha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="d_anime", type="text", length=65535, nullable=true)
     */
    private $dAnime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tsutaya", type="text", length=65535, nullable=true)
     */
    private $tsutaya;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fod", type="text", length=65535, nullable=true)
     */
    private $fod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="paravi", type="text", length=65535, nullable=true)
     */
    private $paravi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telasa", type="text", length=65535, nullable=true)
     */
    private $telasa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abema", type="text", length=65535, nullable=true)
     */
    private $abema;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dtv", type="text", length=65535, nullable=true)
     */
    private $dtv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="disneyplus", type="text", length=65535, nullable=true)
     */
    private $disneyplus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gyao", type="text", length=65535, nullable=true)
     */
    private $gyao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niconico", type="text", length=65535, nullable=true)
     */
    private $niconico;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hikaritv", type="text", length=65535, nullable=true)
     */
    private $hikaritv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fuji_on", type="text", length=65535, nullable=true)
     */
    private $fujiOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jcom_on", type="text", length=65535, nullable=true)
     */
    private $jcomOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bandai_ch", type="text", length=65535, nullable=true)
     */
    private $bandaiCh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="animehoudai", type="text", length=65535, nullable=true)
     */
    private $animehoudai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="milplus", type="text", length=65535, nullable=true)
     */
    private $milplus;

    /**
     * @var string
     *
     * @ORM\Column(name="dmm", type="text", length=65535, nullable=false)
     */
    private $dmm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TVer", type="text", length=65535, nullable=true)
     */
    private $tver;

    /**
     * @ORM\OneToOne(targetEntity="Animelist")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $entityAnimelist;    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmazon(): ?string
    {
        return $this->amazon;
    }

    public function setAmazon(?string $amazon): self
    {
        $this->amazon = $amazon;

        return $this;
    }

    // public function getUNext(): ?string
    // {
    //     return $this->uNext;
    // }

    // public function setUNext(?string $uNext): self
    // {
    //     $this->uNext = $uNext;

    //     return $this;
    // }

    public function getHulu(): ?string
    {
        return $this->hulu;
    }

    public function setHulu(?string $hulu): self
    {
        $this->hulu = $hulu;

        return $this;
    }

    public function getNetflix(): ?string
    {
        return $this->netflix;
    }

    public function setNetflix(?string $netflix): self
    {
        $this->netflix = $netflix;

        return $this;
    }

    public function getWatcha(): ?string
    {
        return $this->watcha;
    }

    public function setWatcha(?string $watcha): self
    {
        $this->watcha = $watcha;

        return $this;
    }

    public function getDAnime(): ?string
    {
        return $this->dAnime;
    }

    public function setDAnime(?string $dAnime): self
    {
        $this->dAnime = $dAnime;

        return $this;
    }

    public function getTsutaya(): ?string
    {
        return $this->tsutaya;
    }

    public function setTsutaya(?string $tsutaya): self
    {
        $this->tsutaya = $tsutaya;

        return $this;
    }

    public function getFod(): ?string
    {
        return $this->fod;
    }

    public function setFod(?string $fod): self
    {
        $this->fod = $fod;

        return $this;
    }

    public function getParavi(): ?string
    {
        return $this->paravi;
    }

    public function setParavi(?string $paravi): self
    {
        $this->paravi = $paravi;

        return $this;
    }

    public function getTelasa(): ?string
    {
        return $this->telasa;
    }

    public function setTelasa(?string $telasa): self
    {
        $this->telasa = $telasa;

        return $this;
    }

    public function getAbema(): ?string
    {
        return $this->abema;
    }

    public function setAbema(?string $abema): self
    {
        $this->abema = $abema;

        return $this;
    }

    public function getDtv(): ?string
    {
        return $this->dtv;
    }

    public function setDtv(?string $dtv): self
    {
        $this->dtv = $dtv;

        return $this;
    }

    public function getDisneyplus(): ?string
    {
        return $this->disneyplus;
    }

    public function setDisneyplus(?string $disneyplus): self
    {
        $this->disneyplus = $disneyplus;

        return $this;
    }

    public function getGyao(): ?string
    {
        return $this->gyao;
    }

    public function setGyao(?string $gyao): self
    {
        $this->gyao = $gyao;

        return $this;
    }

    public function getNiconico(): ?string
    {
        return $this->niconico;
    }

    public function setNiconico(?string $niconico): self
    {
        $this->niconico = $niconico;

        return $this;
    }

    public function getHikaritv(): ?string
    {
        return $this->hikaritv;
    }

    public function setHikaritv(?string $hikaritv): self
    {
        $this->hikaritv = $hikaritv;

        return $this;
    }

    public function getFujiOn(): ?string
    {
        return $this->fujiOn;
    }

    public function setFujiOn(?string $fujiOn): self
    {
        $this->fujiOn = $fujiOn;

        return $this;
    }

    public function getJcomOn(): ?string
    {
        return $this->jcomOn;
    }

    public function setJcomOn(?string $jcomOn): self
    {
        $this->jcomOn = $jcomOn;

        return $this;
    }

    public function getBandaiCh(): ?string
    {
        return $this->bandaiCh;
    }

    public function setBandaiCh(?string $bandaiCh): self
    {
        $this->bandaiCh = $bandaiCh;

        return $this;
    }

    public function getAnimehoudai(): ?string
    {
        return $this->animehoudai;
    }

    public function setAnimehoudai(?string $animehoudai): self
    {
        $this->animehoudai = $animehoudai;

        return $this;
    }

    public function getMilplus(): ?string
    {
        return $this->milplus;
    }

    public function setMilplus(?string $milplus): self
    {
        $this->milplus = $milplus;

        return $this;
    }

    public function getDmm(): ?string
    {
        return $this->dmm;
    }

    public function setDmm(string $dmm): self
    {
        $this->dmm = $dmm;

        return $this;
    }

    public function getTver(): ?string
    {
        return $this->tver;
    }

    public function setTver(?string $tver): self
    {
        $this->tver = $tver;

        return $this;
    }

    public function getEntityAnimelist()
    {
        return $this->entityAnimelist;
    }
    
    public function setEntityAnimelist()
    {
        $this->entityAnimelist = $entityAnimelist;
        return $this;
    }


}
