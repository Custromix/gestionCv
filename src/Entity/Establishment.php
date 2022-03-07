<?php

namespace App\Entity;

use App\Repository\EstablishmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EstablishmentRepository::class)
 */
class Establishment
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
     * @ORM\Column(type="string", length=64)
     */
    private $city;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isvalid;

    /**
     * @ORM\OneToMany(targetEntity=EstablishementDegree::class, mappedBy="idEstablishement")
     */
    private $establishementDegrees;

    public function __construct()
    {
        $this->establishementDegrees = new ArrayCollection();
    }

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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

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
            $establishementDegree->setIdEstablishement($this);
        }

        return $this;
    }

    public function removeEstablishementDegree(EstablishementDegree $establishementDegree): self
    {
        if ($this->establishementDegrees->removeElement($establishementDegree)) {
            // set the owning side to null (unless already changed)
            if ($establishementDegree->getIdEstablishement() === $this) {
                $establishementDegree->setIdEstablishement(null);
            }
        }

        return $this;
    }
}
