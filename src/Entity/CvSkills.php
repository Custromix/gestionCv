<?php

namespace App\Entity;

use App\Repository\CvSkillsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CvSkillsRepository::class)
 */
class CvSkills
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cv::class, inversedBy="cvSkills")
     */
    private $idCv;

    /**
     * @ORM\ManyToOne(targetEntity=Skills::class, inversedBy="cvSkills")
     */
    private $idSkills;

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
