<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillsRepository::class)
 */
class Skills
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
     * @ORM\OneToMany(targetEntity=CvSkills::class, mappedBy="idSkills")
     */
    private $cvSkills;

    /**
     * @ORM\OneToMany(targetEntity=UserSkills::class, mappedBy="idSkills")
     */
    private $userSkills;

    public function __construct()
    {
        $this->cvSkills = new ArrayCollection();
        $this->userSkills = new ArrayCollection();
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
     * @return Collection|CvSkills[]
     */
    public function getCvSkills(): Collection
    {
        return $this->cvSkills;
    }

    public function addCvSkill(CvSkills $cvSkill): self
    {
        if (!$this->cvSkills->contains($cvSkill)) {
            $this->cvSkills[] = $cvSkill;
            $cvSkill->setIdSkills($this);
        }

        return $this;
    }

    public function removeCvSkill(CvSkills $cvSkill): self
    {
        if ($this->cvSkills->removeElement($cvSkill)) {
            // set the owning side to null (unless already changed)
            if ($cvSkill->getIdSkills() === $this) {
                $cvSkill->setIdSkills(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UserSkills[]
     */
    public function getUserSkills(): Collection
    {
        return $this->userSkills;
    }

    public function addUserSkill(UserSkills $userSkill): self
    {
        if (!$this->userSkills->contains($userSkill)) {
            $this->userSkills[] = $userSkill;
            $userSkill->setIdSkills($this);
        }

        return $this;
    }

    public function removeUserSkill(UserSkills $userSkill): self
    {
        if ($this->userSkills->removeElement($userSkill)) {
            // set the owning side to null (unless already changed)
            if ($userSkill->getIdSkills() === $this) {
                $userSkill->setIdSkills(null);
            }
        }

        return $this;
    }
}
