<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animelist
 *
 * @ORM\Table(name="animelist")
 * @ORM\Entity(repositoryClass="App\Repository\AnimelistRepository")
 */
class Animelist
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
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="reading", type="string", length=100, nullable=false)
     */
    private $reading;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=50, nullable=true)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="broadcast", type="text", length=65535, nullable=true)
     */
    private $broadcast;

    /**
     * @var string|null
     *
     * @ORM\Column(name="season", type="string", length=10, nullable=true)
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(name="season2", type="string", length=10, nullable=false)
     */
    private $season2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="officialWeb", type="text", length=65535, nullable=true)
     */
    private $officialweb;

    /**
     * @ORM\OneToOne(targetEntity="Subscription")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $entitySubscription;    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getReading(): ?string
    {
        return $this->reading;
    }

    public function setReading(string $reading): self
    {
        $this->reading = $reading;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getBroadcast(): ?string
    {
        return $this->broadcast;
    }

    public function setBroadcast(?string $broadcast): self
    {
        $this->broadcast = $broadcast;

        return $this;
    }

    public function getSeason(): ?string
    {
        return $this->season;
    }

    public function setSeason(?string $season): self
    {
        $this->season = $season;

        return $this;
    }

    public function getSeason2(): ?string
    {
        return $this->season2;
    }

    public function setSeason2(string $season2): self
    {
        $this->season2 = $season2;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getOfficialweb(): ?string
    {
        return $this->officialweb;
    }

    public function setOfficialweb(?string $officialweb): self
    {
        $this->officialweb = $officialweb;

        return $this;
    }


    public function getEntitySubscription()
    {
        return $this->entitySubscription;
    }
    
    public function setEntitySubscription()
    {
        $this->entitySubscription = $entitySubscription;
        return $this;
    }
}
