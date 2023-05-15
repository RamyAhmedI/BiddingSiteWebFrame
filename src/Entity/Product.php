<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column(length: 255)]
    private ?string $productMake = null;

    #[ORM\Column]
    private ?int $productStorageSize = null;

    #[ORM\Column(length: 255)]
    private ?string $productOS = null;

    #[ORM\Column(length: 255)]
    private ?string $bidStatus = null;

    #[ORM\Column(nullable: true)]
    private ?float $bidAmount = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\ManyToOne]
    private ?Listing $product = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductMake(): ?string
    {
        return $this->productMake;
    }

    public function setProductMake(string $productMake): self
    {
        $this->productMake = $productMake;

        return $this;
    }

    public function getProductStorageSize(): ?int
    {
        return $this->productStorageSize;
    }

    public function setProductStorageSize(int $productStorageSize): self
    {
        $this->productStorageSize = $productStorageSize;

        return $this;
    }

    public function getProductOS(): ?string
    {
        return $this->productOS;
    }

    public function setProductOS(string $productOS): self
    {
        $this->productOS = $productOS;

        return $this;
    }

    public function getBidStatus(): ?string
    {
        return $this->bidStatus;
    }

    public function setBidStatus(string $bidStatus): self
    {
        $this->bidStatus = $bidStatus;

        return $this;
    }

    public function getBidAmount(): ?float
    {
        return $this->bidAmount;
    }

    public function setBidAmount(?float $bidAmount): self
    {
        $this->bidAmount = $bidAmount;

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

    public function getProduct(): ?Listing
    {
        return $this->product;
    }

    public function setProduct(?Listing $product): self
    {
        $this->product = $product;

        return $this;
    }
}
