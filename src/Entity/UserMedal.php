<?php

namespace App\Entity;

use App\Repository\UserMedalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserMedalRepository::class)
 */
class UserMedal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userMedals")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity=Medal::class, inversedBy="userMedals")
     */
    private $idMedal;

    /**
     * @ORM\Column(type="date")
     */
    private $obtainedDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?user
    {
        return $this->idUser;
    }

    public function setIdUser(?user $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdMedal(): ?medal
    {
        return $this->idMedal;
    }

    public function setIdMedal(?medal $idMedal): self
    {
        $this->idMedal = $idMedal;

        return $this;
    }

    public function getObtainedDate(): ?\DateTimeInterface
    {
        return $this->obtainedDate;
    }

    public function setObtainedDate(\DateTimeInterface $obtainedDate): self
    {
        $this->obtainedDate = $obtainedDate;

        return $this;
    }
}
