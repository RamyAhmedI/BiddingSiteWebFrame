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

    #[ORM\Column(length: 255)]
    private ?string $Date = null;

    #[ORM\Column(length: 255)]
    private ?string $Cancel = null;

    #[ORM\Column]
    private ?int $Time = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    #[ORM\ManyToOne]
    private ?Listing $bid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getCancel(): ?string
    {
        return $this->Cancel;
    }

    public function setCancel(string $Cancel): self
    {
        $this->Cancel = $Cancel;

        return $this;
    }

    public function getTime(): ?int
    {
        return $this->Time;
    }

    public function setTime(int $Time): self
    {
        $this->Time = $Time;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getBid(): ?Listing
    {
        return $this->bid;
    }

    public function setBid(?Listing $bid): self
    {
        $this->bid = $bid;

        return $this;
    }
}
