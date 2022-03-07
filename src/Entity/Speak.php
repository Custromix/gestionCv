<?php

namespace App\Entity;

use App\Repository\SpeakRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpeakRepository::class)
 */
class Speak
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=cv::class, inversedBy="speaks")
     */
    private $idCv;

    /**
     * @ORM\ManyToOne(targetEntity=Language::class, inversedBy="speaks")
     */
    private $idLanguage;

    /**
     * @ORM\ManyToOne(targetEntity=SpeakLevel::class, inversedBy="speaks")
     */
    private $idSpeakLevel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCv(): ?cv
    {
        return $this->idCv;
    }

    public function setIdCv(?cv $idCv): self
    {
        $this->idCv = $idCv;

        return $this;
    }

    public function getIdLanguage(): ?language
    {
        return $this->idLanguage;
    }

    public function setIdLanguage(?language $idLanguage): self
    {
        $this->idLanguage = $idLanguage;

        return $this;
    }

    public function getIdSpeakLevel(): ?SpeakLevel
    {
        return $this->idSpeakLevel;
    }

    public function setIdSpeakLevel(?SpeakLevel $idSpeakLevel): self
    {
        $this->idSpeakLevel = $idSpeakLevel;

        return $this;
    }
}
