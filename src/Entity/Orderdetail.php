<?php

namespace App\Entity;

use App\Repository\OrderdetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderdetailRepository::class)]
class Orderdetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Order::class, inversedBy: 'orderdetails')]
    private $orderobj;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'orderdetails')]
    private $product;

    #[ORM\Column(type: 'integer')]
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderobj(): ?Order
    {
        return $this->orderobj;
    }

    public function setOrderobj(?Order $orderobj): self
    {
        $this->orderobj = $orderobj;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
