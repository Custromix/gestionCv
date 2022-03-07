<?php

namespace App\Entity;

use App\Repository\LicenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LicenceRepository::class)
 */
class Licence
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
     * @ORM\OneToMany(targetEntity=UserLicence::class, mappedBy="idLicence")
     */
    private $userLicences;

    public function __construct()
    {
        $this->userLicences = new ArrayCollection();
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
     * @return Collection|UserLicence[]
     */
    public function getUserLicences(): Collection
    {
        return $this->userLicences;
    }

    public function addUserLicence(UserLicence $userLicence): self
    {
        if (!$this->userLicences->contains($userLicence)) {
            $this->userLicences[] = $userLicence;
            $userLicence->setIdLicence($this);
        }

        return $this;
    }

    public function removeUserLicence(UserLicence $userLicence): self
    {
        if ($this->userLicences->removeElement($userLicence)) {
            // set the owning side to null (unless already changed)
            if ($userLicence->getIdLicence() === $this) {
                $userLicence->setIdLicence(null);
            }
        }

        return $this;
    }
}
