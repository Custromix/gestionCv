<?php

namespace App\Entity;

use App\Repository\ContractTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContractTypeRepository::class)
 */
class ContractType
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity=CvContract::class, mappedBy="idContract")
     */
    private $cvContracts;

    public function __construct()
    {
        $this->cvContracts = new ArrayCollection();
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
     * @return Collection|CvContract[]
     */
    public function getCvContracts(): Collection
    {
        return $this->cvContracts;
    }

    public function addCvContract(CvContract $cvContract): self
    {
        if (!$this->cvContracts->contains($cvContract)) {
            $this->cvContracts[] = $cvContract;
            $cvContract->setIdContract($this);
        }

        return $this;
    }

    public function removeCvContract(CvContract $cvContract): self
    {
        if ($this->cvContracts->removeElement($cvContract)) {
            // set the owning side to null (unless already changed)
            if ($cvContract->getIdContract() === $this) {
                $cvContract->setIdContract(null);
            }
        }

        return $this;
    }
}
