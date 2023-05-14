<?php

namespace App\Entity;

use App\Repository\BidRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BidRepository::class)]
class Bid
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $bidStatus = null;

    #[ORM\Column(nullable: true)]
    private ?float $bidAmount = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
