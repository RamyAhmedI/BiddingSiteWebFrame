<?php

namespace App\Entity;

use App\Repository\PhoneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhoneRepository::class)]
class Phone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Model = null;

    #[ORM\Column(length: 255)]
    private ?string $OSType = null;

    #[ORM\Column(length: 255)]
    private ?string $Price = null;

    #[ORM\Column]
    private ?int $memory = null;

    #[ORM\ManyToOne(inversedBy: 'phones')]
    private ?Make $manufacturer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->Model;
    }

    public function setModel(string $Model): self
    {
        $this->Model = $Model;

        return $this;
    }

    public function getMemory(): ?int
    {
        return $this->memory;
    }

    public function setMemory(int $memory): self
    {
        $this->memory = $memory;

        return $this;
    }

    public function getManufacturer(): ?Make
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?Make $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getOSType(): ?string
    {
        return $this->OSType;
    }

    public function setOSType(string $OSType): self
    {
        $this->OSType = $OSType;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }
}
