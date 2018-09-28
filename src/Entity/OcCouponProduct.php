<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCouponProduct
 *
 * @ORM\Table(name="oc_coupon_product")
 * @ORM\Entity
 */
class OcCouponProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="coupon_product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $couponProductId;

    /**
     * @var int
     *
     * @ORM\Column(name="coupon_id", type="integer", nullable=false)
     */
    private $couponId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    public function getCouponProductId(): ?int
    {
        return $this->couponProductId;
    }

    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    public function setCouponId(int $couponId): self
    {
        $this->couponId = $couponId;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }


}
