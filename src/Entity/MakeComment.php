<?php

namespace App\Entity;

use App\Repository\MakeCommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MakeCommentRepository::class)]
class MakeComment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MakeComment = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $MakeReply = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMakeComment(): ?string
    {
        return $this->MakeComment;
    }

    public function setMakeComment(?string $MakeComment): self
    {
        $this->MakeComment = $MakeComment;

        return $this;
    }

    public function getMakeReply(): ?string
    {
        return $this->MakeReply;
    }

    public function setMakeReply(?string $MakeReply): self
    {
        $this->MakeReply = $MakeReply;

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
