<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomerWishlist
 *
 * @ORM\Table(name="oc_customer_wishlist")
 * @ORM\Entity
 */
class OcCustomerWishlist
{
    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }


}
