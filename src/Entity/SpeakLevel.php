<?php

namespace App\Entity;

use App\Repository\SpeakLevelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpeakLevelRepository::class)
 */
class SpeakLevel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity=Speak::class, mappedBy="idSpeakLevel")
     */
    private $speaks;

    public function __construct()
    {
        $this->speaks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

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
            $speak->setIdSpeakLevel($this);
        }

        return $this;
    }

    public function removeSpeak(Speak $speak): self
    {
        if ($this->speaks->removeElement($speak)) {
            // set the owning side to null (unless already changed)
            if ($speak->getIdSpeakLevel() === $this) {
                $speak->setIdSpeakLevel(null);
            }
        }

        return $this;
    }
}
