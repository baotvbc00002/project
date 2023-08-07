<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Massage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Time = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getMassage(): ?string
    {
        return $this->Massage;
    }

    public function setMassage(string $Massage): static
    {
        $this->Massage = $Massage;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->Time;
    }

    public function setTime(\DateTimeInterface $Time): static
    {
        $this->Time = $Time;

        return $this;
    }
}
