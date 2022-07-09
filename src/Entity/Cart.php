<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'carts')]
    private $User;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'carts')]
    private $Product;

    #[ORM\Column(type: 'string', length: 255)]
    private $quatity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->Product;
    }

    public function setProduct(?Product $Product): self
    {
        $this->Product = $Product;

        return $this;
    }

    public function getQuatity(): ?string
    {
        return $this->quatity;
    }

    public function setQuatity(string $quatity): self
    {
        $this->quatity = $quatity;

        return $this;
    }
}
