<?php

namespace App\Entity;

use App\Repository\CvHobbyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CvHobbyRepository::class)
 */
class CvHobby
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cv::class, inversedBy="cvHobbies")
     */
    private $idCv;

    /**
     * @ORM\ManyToOne(targetEntity=Hobby::class, inversedBy="cvHobbies")
     */
    private $idHobby;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCv(): ?cv
    {
        return $this->idCv;
    }

    public function setIdCv(?cv $idCv): self
    {
        $this->idCv = $idCv;

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
