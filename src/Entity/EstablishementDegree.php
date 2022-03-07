<?php

namespace App\Entity;

use App\Repository\EstablishementDegreeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstablishementDegreeRepository::class)
 */
class EstablishementDegree
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Degree::class, inversedBy="establishementDegrees")
     */
    private $idDegree;

    /**
     * @ORM\ManyToOne(targetEntity=Establishment::class, inversedBy="establishementDegrees")
     */
    private $idEstablishement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDegree(): ?degree
    {
        return $this->idDegree;
    }

    public function setIdDegree(?degree $idDegree): self
    {
        $this->idDegree = $idDegree;

        return $this;
    }

    public function getIdEstablishement(): ?Establishment
    {
        return $this->idEstablishement;
    }

    public function setIdEstablishement(?Establishment $idEstablishement): self
    {
        $this->idEstablishement = $idEstablishement;

        return $this;
    }
}
