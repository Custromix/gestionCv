<?php

namespace App\Entity;

use App\Repository\TypeDegreesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeDegreesRepository::class)
 */
class TypeDegrees
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
    private $label;

    /**
     * @ORM\OneToMany(targetEntity=Degree::class, mappedBy="typeDegrees")
     */
    private $idType;

    public function __construct()
    {
        $this->idType = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Degree[]
     */
    public function getIdType(): Collection
    {
        return $this->idType;
    }

    public function addIdType(Degree $idType): self
    {
        if (!$this->idType->contains($idType)) {
            $this->idType[] = $idType;
            $idType->setTypeDegrees($this);
        }

        return $this;
    }

    public function removeIdType(Degree $idType): self
    {
        if ($this->idType->removeElement($idType)) {
            // set the owning side to null (unless already changed)
            if ($idType->getTypeDegrees() === $this) {
                $idType->setTypeDegrees(null);
            }
        }

        return $this;
    }
}
