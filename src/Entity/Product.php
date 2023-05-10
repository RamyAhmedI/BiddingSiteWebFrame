<?php

namespace App\Entity;

use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhoneRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Model = null;

    #[ORM\Column]
    private ?int $memory = null;

    #[ORM\ManyToOne(inversedBy: 'phones')]
    private ?Make $manufacturer = null;

    public function getName(): ?int
    {
        return $this->name;
    }

    public function getMake(): ?string
    {
        return $this->Make;
    }

    public function setMake(string $Make): self
    {
        $this->Make = $Make;

        return $this;
    }

    public function getStorageSize(): ?int
    {
        return $this->storagesize;
    }

    public function setStorageSize(int $storagesize): self
    {
        $this->storagesize = $storagesize;

        return $this;
    }

    public function getOSSystem(): ?Make
    {
        return $this->OSSystem;
    }

    public function setOSSystem(?Make $OSSystem): self
    {
        $this->OSSystem = $OSSystem;

        return $this;
    }
}