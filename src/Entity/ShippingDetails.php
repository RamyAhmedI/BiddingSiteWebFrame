<?php

namespace App\Entity;

use App\Repository\ShippingDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ShippingDetailsRepository::class)]
class ShippingDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
<<<<<<< HEAD
    private ?string $productName = null;

    #[ORM\Column]
    private ?float $price = null;
=======
    private ?string $name = null;

    #[ORM\Column]
    private ?int $phone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86

    #[ORM\Column(length: 255)]
    private ?string $address = null;

<<<<<<< HEAD
=======
    #[ORM\Column(length: 255)]
    private ?string $product = null;

    #[ORM\Column]
    private ?float $price = null;

>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;
=======
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86

        return $this;
    }

<<<<<<< HEAD
    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
=======
    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86

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
<<<<<<< HEAD
=======

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
>>>>>>> 2c972367fd192714e38dd911da82b8b54eea4b86
}
