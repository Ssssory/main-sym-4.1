<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiReviews
 *
 * @ORM\Table(name="oc_li_reviews", indexes={@ORM\Index(name="review_id", columns={"review_id"}), @ORM\Index(name="product_id", columns={"product_id"}), @ORM\Index(name="hash", columns={"hash"})})
 * @ORM\Entity
 */
class OcLiReviews
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="review_id", type="integer", nullable=true)
     */
    private $reviewId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hash", type="string", length=2000, nullable=true)
     */
    private $hash;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReviewId(): ?int
    {
        return $this->reviewId;
    }

    public function setReviewId(?int $reviewId): self
    {
        $this->reviewId = $reviewId;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(?string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }


}
