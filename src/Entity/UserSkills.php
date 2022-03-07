<?php

namespace App\Entity;

use App\Repository\UserSkillsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserSkillsRepository::class)
 */
class UserSkills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userSkills")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity=Skills::class, inversedBy="userSkills")
     */
    private $idSkills;

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

    public function getIdSkills(): ?skills
    {
        return $this->idSkills;
    }

    public function setIdSkills(?skills $idSkills): self
    {
        $this->idSkills = $idSkills;

        return $this;
    }
}
