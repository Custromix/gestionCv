<?php

namespace App\Entity;

use App\Repository\LanguageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LanguageRepository::class)
 */
class Language
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
    private $language;

    /**
     * @ORM\OneToMany(targetEntity=Speak::class, mappedBy="idLanguage")
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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

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
            $speak->setIdLanguage($this);
        }

        return $this;
    }

    public function removeSpeak(Speak $speak): self
    {
        if ($this->speaks->removeElement($speak)) {
            // set the owning side to null (unless already changed)
            if ($speak->getIdLanguage() === $this) {
                $speak->setIdLanguage(null);
            }
        }

        return $this;
    }
}
