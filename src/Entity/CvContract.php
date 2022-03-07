<?php

namespace App\Entity;

use App\Repository\CvContractRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CvContractRepository::class)
 */
class CvContract
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cv::class, inversedBy="cvContracts")
     */
    private $idCv;

    /**
     * @ORM\ManyToOne(targetEntity=ContractType::class, inversedBy="cvContracts")
     */
    private $idContract;

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

    public function getIdContract(): ?ContractType
    {
        return $this->idContract;
    }

    public function setIdContract(?ContractType $idContract): self
    {
        $this->idContract = $idContract;

        return $this;
    }
}
