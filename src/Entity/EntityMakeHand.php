<?php

namespace App\Entity;

use App\Repository\EntityMakeHandRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityMakeHandRepository::class)]
class EntityMakeHand
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $return = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReturn(): ?string
    {
        return $this->return;
    }

    public function setReturn(string $return): static
    {
        $this->return = $return;

        return $this;
    }
}
