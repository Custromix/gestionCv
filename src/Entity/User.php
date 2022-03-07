<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=UserHobby::class, mappedBy="idUser")
     */
    private $userHobbies;

    /**
     * @ORM\OneToMany(targetEntity=UserSkills::class, mappedBy="idUser")
     */
    private $userSkills;

    /**
     * @ORM\OneToMany(targetEntity=UserLicence::class, mappedBy="idUser")
     */
    private $userLicences;

    /**
     * @ORM\OneToMany(targetEntity=UserMedal::class, mappedBy="idUser")
     */
    private $userMedals;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $fname;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="date")
     */
    private $birth;

    /**
     * @ORM\OneToMany(targetEntity=Cv::class, mappedBy="user")
     */
    private $idUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    public function __construct()
    {
        $this->userHobbies = new ArrayCollection();
        $this->userSkills = new ArrayCollection();
        $this->userLicences = new ArrayCollection();
        $this->userMedals = new ArrayCollection();
        $this->idUser = new ArrayCollection();
    }

    public function __toString(){
        return $this->fname . " " . $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|UserHobby[]
     */
    public function getUserHobbies(): Collection
    {
        return $this->userHobbies;
    }

    public function addUserHobby(UserHobby $userHobby): self
    {
        if (!$this->userHobbies->contains($userHobby)) {
            $this->userHobbies[] = $userHobby;
            $userHobby->setIdUser($this);
        }

        return $this;
    }

    public function removeUserHobby(UserHobby $userHobby): self
    {
        if ($this->userHobbies->removeElement($userHobby)) {
            // set the owning side to null (unless already changed)
            if ($userHobby->getIdUser() === $this) {
                $userHobby->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UserSkills[]
     */
    public function getUserSkills(): Collection
    {
        return $this->userSkills;
    }

    public function addUserSkill(UserSkills $userSkill): self
    {
        if (!$this->userSkills->contains($userSkill)) {
            $this->userSkills[] = $userSkill;
            $userSkill->setIdUser($this);
        }

        return $this;
    }

    public function removeUserSkill(UserSkills $userSkill): self
    {
        if ($this->userSkills->removeElement($userSkill)) {
            // set the owning side to null (unless already changed)
            if ($userSkill->getIdUser() === $this) {
                $userSkill->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UserLicence[]
     */
    public function getUserLicences(): Collection
    {
        return $this->userLicences;
    }

    public function addUserLicence(UserLicence $userLicence): self
    {
        if (!$this->userLicences->contains($userLicence)) {
            $this->userLicences[] = $userLicence;
            $userLicence->setIdUser($this);
        }

        return $this;
    }

    public function removeUserLicence(UserLicence $userLicence): self
    {
        if ($this->userLicences->removeElement($userLicence)) {
            // set the owning side to null (unless already changed)
            if ($userLicence->getIdUser() === $this) {
                $userLicence->setIdUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UserMedal[]
     */
    public function getUserMedals(): Collection
    {
        return $this->userMedals;
    }

    public function addUserMedal(UserMedal $userMedal): self
    {
        if (!$this->userMedals->contains($userMedal)) {
            $this->userMedals[] = $userMedal;
            $userMedal->setIdUser($this);
        }

        return $this;
    }

    public function removeUserMedal(UserMedal $userMedal): self
    {
        if ($this->userMedals->removeElement($userMedal)) {
            // set the owning side to null (unless already changed)
            if ($userMedal->getIdUser() === $this) {
                $userMedal->setIdUser(null);
            }
        }

        return $this;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(string $fname): self
    {
        $this->fname = $fname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostal(): ?int
    {
        return $this->postal;
    }

    public function setPostal(int $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getBirth(): ?\DateTimeInterface
    {
        return $this->birth;
    }

    public function setBirth(\DateTimeInterface $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * @return Collection|cv[]
     */
    public function getIdUser(): Collection
    {
        return $this->idUser;
    }

    public function addIdUser(Cv $idUser): self
    {
        if (!$this->idUser->contains($idUser)) {
            $this->idUser[] = $idUser;
            $idUser->setUser($this);
        }

        return $this;
    }

    public function removeIdUser(Cv $idUser): self
    {
        if ($this->idUser->removeElement($idUser)) {
            // set the owning side to null (unless already changed)
            if ($idUser->getUser() === $this) {
                $idUser->setUser(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
}
