<?php

namespace App\Entity;

use App\Repository\DegreeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DegreeRepository::class)
 */
class Degree
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $obtainedYear;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isvalid;

    /**
     * @ORM\OneToMany(targetEntity=ToGet::class, mappedBy="idCv")
     */
    private $toGets;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDegrees::class, inversedBy="idType")
     */
    private $typeDegrees;

    /**
     * @ORM\OneToMany(targetEntity=EstablishementDegree::class, mappedBy="idDegree")
     */
    private $establishementDegrees;

    public function __construct()
    {
        $this->idDegree = new ArrayCollection();
        $this->establishementDegrees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObtainedYear(): ?\DateTimeInterface
    {
        return $this->obtainedYear;
    }

    public function setObtainedYear(\DateTimeInterface $obtainedYear): self
    {
        $this->obtainedYear = $obtainedYear;

        return $this;
    }

    public function getIsvalid(): ?bool
    {
        return $this->isvalid;
    }

    public function setIsvalid(bool $isvalid): self
    {
        $this->isvalid = $isvalid;

        return $this;
    }

    /**
     * @return Collection|ToGet[]
     */
    public function getToGets(): Collection
    {
        return $this->toGets;
    }

    public function addToGet(ToGet $toGet): self
    {
        if (!$this->toGets->contains($toGet)) {
            $this->toGets[] = $toGet;
            $toGet->setIdDegree($this);
        }

        return $this;
    }

    public function removeToGet(ToGet $toGet): self
    {
        if ($this->toGets->removeElement($toGet)) {
            // set the owning side to null (unless already changed)
            if ($toGet->setIdDegree() === $this) {
                $toGet->setIdDegree(null);
            }
        }

        return $this;
    }

    public function getTypeDegrees(): ?TypeDegrees
    {
        return $this->typeDegrees;
    }

    public function setTypeDegrees(?TypeDegrees $typeDegrees): self
    {
        $this->typeDegrees = $typeDegrees;

        return $this;
    }

    /**
     * @return Collection|EstablishementDegree[]
     */
    public function getEstablishementDegrees(): Collection
    {
        return $this->establishementDegrees;
    }

    public function addEstablishementDegree(EstablishementDegree $establishementDegree): self
    {
        if (!$this->establishementDegrees->contains($establishementDegree)) {
            $this->establishementDegrees[] = $establishementDegree;
            $establishementDegree->setIdDegree($this);
        }

        return $this;
    }

    public function removeEstablishementDegree(EstablishementDegree $establishementDegree): self
    {
        if ($this->establishementDegrees->removeElement($establishementDegree)) {
            // set the owning side to null (unless already changed)
            if ($establishementDegree->getIdDegree() === $this) {
                $establishementDegree->setIdDegree(null);
            }
        }

        return $this;
    }
}
