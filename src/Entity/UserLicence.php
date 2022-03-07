<?php

namespace App\Entity;

use App\Repository\UserLicenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserLicenceRepository::class)
 */
class UserLicence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userLicences")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity=Licence::class, inversedBy="userLicences")
     */
    private $idLicence;

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

    public function getIdLicence(): ?licence
    {
        return $this->idLicence;
    }

    public function setIdLicence(?licence $idLicence): self
    {
        $this->idLicence = $idLicence;

        return $this;
    }
}
