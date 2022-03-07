<?php

namespace App\Entity;

use App\Repository\MedalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedalRepository::class)
 */
class Medal
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
     * @ORM\OneToMany(targetEntity=UserMedal::class, mappedBy="idMedal")
     */
    private $userMedals;

    public function __construct()
    {
        $this->userMedals = new ArrayCollection();
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
     * @return Collection|UserMedal[]
     */
    public function getUserMedals(): Collection
    {
        return $this->userMedals;
    }

    public function addUserMedal(UserMedal $userMedal): self
    {
        if (!$this->userMedals->contains($userMedal)) {
            $this->userMedals[] = $userMedal;
            $userMedal->setIdMedal($this);
        }

        return $this;
    }

    public function removeUserMedal(UserMedal $userMedal): self
    {
        if ($this->userMedals->removeElement($userMedal)) {
            // set the owning side to null (unless already changed)
            if ($userMedal->getIdMedal() === $this) {
                $userMedal->setIdMedal(null);
            }
        }

        return $this;
    }
}
