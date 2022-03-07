<?php

namespace App\Entity;

use App\Repository\OtherInfoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OtherInfoRepository::class)
 */
class OtherInfo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgpath;

    /**
     * @ORM\ManyToOne(targetEntity=Cv::class, inversedBy="otherInfos")
     */
    private $idCv;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getImgpath(): ?string
    {
        return $this->imgpath;
    }

    public function setImgpath(?string $imgpath): self
    {
        $this->imgpath = $imgpath;

        return $this;
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
}
