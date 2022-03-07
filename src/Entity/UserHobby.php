<?php

namespace App\Entity;

use App\Repository\UserHobbyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserHobbyRepository::class)
 */
class UserHobby
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userHobbies")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity=Hobby::class, inversedBy="userHobbies")
     */
    private $idHobby;

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

    public function getIdHobby(): ?hobby
    {
        return $this->idHobby;
    }

    public function setIdHobby(?hobby $idHobby): self
    {
        $this->idHobby = $idHobby;

        return $this;
    }
}
