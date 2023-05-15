<?php

namespace App\Entity;

use App\Repository\ListingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListingRepository::class)]
class Listing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $stillAvailable = null;

    #[ORM\Column]
    private ?float $minPrice = null;

    #[ORM\Column]
    private ?float $setDate = null;

    #[ORM\Column]
    private ?float $setTime = null;

    #[ORM\Column]
    private ?float $timeLimit = null;

    #[ORM\Column]
    private ?float $minimumBid = null;

    #[ORM\Column]
    private ?bool $listingDeleted = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    #[ORM\ManyToOne]
    private ?ShippingDetails $shippingdetails = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isStillAvailable(): ?bool
    {
        return $this->stillAvailable;
    }

    public function setStillAvailable(bool $stillAvailable): self
    {
        $this->stillAvailable = $stillAvailable;

        return $this;
    }

    public function getMinPrice(): ?float
    {
        return $this->minPrice;
    }

    public function setMinPrice(float $minPrice): self
    {
        $this->minPrice = $minPrice;

        return $this;
    }

    public function getSetDate(): ?float
    {
        return $this->setDate;
    }

    public function setSetDate(float $setDate): self
    {
        $this->setDate = $setDate;

        return $this;
    }

    public function getSetTime(): ?float
    {
        return $this->setTime;
    }

    public function setSetTime(float $setTime): self
    {
        $this->setTime = $setTime;

        return $this;
    }

    public function getTimeLimit(): ?float
    {
        return $this->timeLimit;
    }

    public function setTimeLimit(float $timeLimit): self
    {
        $this->timeLimit = $timeLimit;

        return $this;
    }

    public function getMinimumBid(): ?float
    {
        return $this->minimumBid;
    }

    public function setMinimumBid(float $minimumBid): self
    {
        $this->minimumBid = $minimumBid;

        return $this;
    }

    public function isListingDeleted(): ?bool
    {
        return $this->listingDeleted;
    }

    public function setListingDeleted(bool $listingDeleted): self
    {
        $this->listingDeleted = $listingDeleted;

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

    public function getShippingdetails(): ?ShippingDetails
    {
        return $this->shippingdetails;
    }

    public function setShippingdetails(?ShippingDetails $shippingdetails): self
    {
        $this->shippingdetails = $shippingdetails;

        return $this;
    }
}
