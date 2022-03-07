<?php

namespace App\Entity;

use App\Repository\ToGetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ToGetRepository::class)
 */
class ToGet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cv::class, inversedBy="toGets")
     */
    private $idCv;

    /**
     * @ORM\ManyToOne(targetEntity=Degree::class, inversedBy="idDegree")
     */
    private $idDegree;

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

    public function getIdDegree(): ?Degree
    {
        return $this->idDegree;
    }

    public function setIdDegree(?Degree $idDegree): self
    {
        $this->idDegree = $idDegree;

        return $this;
    }

}
