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

    #[ORM\Column(length: 255)]
    private ?string $comment = null;

    #[ORM\ManyToOne]
    private ?User $makecomment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getMakecomment(): ?User
    {
        return $this->makecomment;
    }

    public function setMakecomment(?User $makecomment): self
    {
        $this->makecomment = $makecomment;

        return $this;
    }
}
