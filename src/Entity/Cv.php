<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CvRepository::class)
 */
class Cv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=Experience::class, mappedBy="cvId")
     */
    private $experiences;

    /**
     * @ORM\OneToMany(targetEntity=Speak::class, mappedBy="idCv")
     */
    private $speaks;

    /**
     * @ORM\OneToMany(targetEntity=ToGet::class, mappedBy="idCv")
     */
    private $toGets;

    /**
     * @ORM\OneToMany(targetEntity=CvContract::class, mappedBy="idCv")
     */
    private $cvContracts;

    /**
     * @ORM\OneToMany(targetEntity=OtherInfo::class, mappedBy="idInfo")
     */
    private $otherInfos;

    /**
     * @ORM\OneToMany(targetEntity=CvHobby::class, mappedBy="idCv")
     */
    private $cvHobbies;

    /**
     * @ORM\OneToMany(targetEntity=CvSkills::class, mappedBy="idCv")
     */
    private $cvSkills;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idUser")
     */
    private $user;

    public function __construct()
    {
        $this->experiences = new ArrayCollection();
        $this->languages = new ArrayCollection();
        $this->speaks = new ArrayCollection();
        $this->toGets = new ArrayCollection();
        $this->cvContracts = new ArrayCollection();
        $this->otherInfos = new ArrayCollection();
        $this->cvHobbies = new ArrayCollection();
        $this->cvSkills = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Experience[]
     */
    public function getExperiences(): Collection
    {
        return $this->experiences;
    }

    public function addExperience(Experience $experience): self
    {
        if (!$this->experiences->contains($experience)) {
            $this->experiences[] = $experience;
            $experience->setCvId($this);
        }

        return $this;
    }

    public function removeExperience(Experience $experience): self
    {
        if ($this->experiences->removeElement($experience)) {
            // set the owning side to null (unless already changed)
            if ($experience->getCvId() === $this) {
                $experience->setCvId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Speak[]
     */
    public function getSpeaks(): Collection
    {
        return $this->speaks;
    }

    public function addSpeak(Speak $speak): self
    {
        if (!$this->speaks->contains($speak)) {
            $this->speaks[] = $speak;
            $speak->setIdCv($this);
        }

        return $this;
    }

    public function removeSpeak(Speak $speak): self
    {
        if ($this->speaks->removeElement($speak)) {
            // set the owning side to null (unless already changed)
            if ($speak->getIdCv() === $this) {
                $speak->setIdCv(null);
            }
        }

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
            $toGet->setIdCv($this);
        }

        return $this;
    }

    public function removeToGet(ToGet $toGet): self
    {
        if ($this->toGets->removeElement($toGet)) {
            // set the owning side to null (unless already changed)
            if ($toGet->getIdCv() === $this) {
                $toGet->setIdCv(null);
            }
        }

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
            $cvContract->setIdCv($this);
        }

        return $this;
    }

    public function removeCvContract(CvContract $cvContract): self
    {
        if ($this->cvContracts->removeElement($cvContract)) {
            // set the owning side to null (unless already changed)
            if ($cvContract->getIdCv() === $this) {
                $cvContract->setIdCv(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|OtherInfo[]
     */
    public function getOtherInfos(): Collection
    {
        return $this->otherInfos;
    }

    public function addOtherInfo(OtherInfo $otherInfo): self
    {
        if (!$this->otherInfos->contains($otherInfo)) {
            $this->otherInfos[] = $otherInfo;
            $otherInfo->setIdInfo($this);
        }

        return $this;
    }

    public function removeOtherInfo(OtherInfo $otherInfo): self
    {
        if ($this->otherInfos->removeElement($otherInfo)) {
            // set the owning side to null (unless already changed)
            if ($otherInfo->getIdInfo() === $this) {
                $otherInfo->setIdInfo(null);
            }
        }

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
            $cvHobby->setIdCv($this);
        }

        return $this;
    }

    public function removeCvHobby(CvHobby $cvHobby): self
    {
        if ($this->cvHobbies->removeElement($cvHobby)) {
            // set the owning side to null (unless already changed)
            if ($cvHobby->getIdCv() === $this) {
                $cvHobby->setIdCv(null);
            }
        }

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
            $cvSkill->setIdCv($this);
        }

        return $this;
    }

    public function removeCvSkill(CvSkills $cvSkill): self
    {
        if ($this->cvSkills->removeElement($cvSkill)) {
            // set the owning side to null (unless already changed)
            if ($cvSkill->getIdCv() === $this) {
                $cvSkill->setIdCv(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
