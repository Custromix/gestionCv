<?php

namespace App\Entity;

use App\Repository\HobbyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HobbyRepository::class)
 */
class Hobby
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
     * @ORM\OneToMany(targetEntity=CvHobby::class, mappedBy="idHobby")
     */
    private $cvHobbies;

    /**
     * @ORM\OneToMany(targetEntity=UserHobby::class, mappedBy="idHobby")
     */
    private $userHobbies;

    public function __construct()
    {
        $this->cvHobbies = new ArrayCollection();
        $this->userHobbies = new ArrayCollection();
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
     * @return Collection|CvHobby[]
     */
    public function getCvHobbies(): Collection
    {
        return $this->cvHobbies;
    }

    public function addCvHobby(CvHobby $cvHobby): self
    {
        if (!$this->cvHobbies->contains($cvHobby)) {
            $this->cvHobbies[] = $cvHobby;
            $cvHobby->setIdHobby($this);
        }

        return $this;
    }

    public function removeCvHobby(CvHobby $cvHobby): self
    {
        if ($this->cvHobbies->removeElement($cvHobby)) {
            // set the owning side to null (unless already changed)
            if ($cvHobby->getIdHobby() === $this) {
                $cvHobby->setIdHobby(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UserHobby[]
     */
    public function getUserHobbies(): Collection
    {
        return $this->userHobbies;
    }

    public function addUserHobby(UserHobby $userHobby): self
    {
        if (!$this->userHobbies->contains($userHobby)) {
            $this->userHobbies[] = $userHobby;
            $userHobby->setIdHobby($this);
        }

        return $this;
    }

    public function removeUserHobby(UserHobby $userHobby): self
    {
        if ($this->userHobbies->removeElement($userHobby)) {
            // set the owning side to null (unless already changed)
            if ($userHobby->getIdHobby() === $this) {
                $userHobby->setIdHobby(null);
            }
        }

        return $this;
    }
}
