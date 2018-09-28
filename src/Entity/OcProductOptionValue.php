<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductOptionValue
 *
 * @ORM\Table(name="oc_product_option_value")
 * @ORM\Entity
 */
class OcProductOptionValue
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_option_value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productOptionValueId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_option_id", type="integer", nullable=false)
     */
    private $productOptionId;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="option_id", type="integer", nullable=false)
     */
    private $optionId;

    /**
     * @var int
     *
     * @ORM\Column(name="option_value_id", type="integer", nullable=false)
     */
    private $optionValueId;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="subtract", type="boolean", nullable=false)
     */
    private $subtract;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="price_prefix", type="string", length=1, nullable=false)
     */
    private $pricePrefix;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="points_prefix", type="string", length=1, nullable=false)
     */
    private $pointsPrefix;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=15, scale=8, nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_prefix", type="string", length=1, nullable=false)
     */
    private $weightPrefix;

    public function getProductOptionValueId(): ?int
    {
        return $this->productOptionValueId;
    }

    public function getProductOptionId(): ?int
    {
        return $this->productOptionId;
    }

    public function setProductOptionId(int $productOptionId): self
    {
        $this->productOptionId = $productOptionId;

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

    public function getOptionId(): ?int
    {
        return $this->optionId;
    }

    public function setOptionId(int $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function getOptionValueId(): ?int
    {
        return $this->optionValueId;
    }

    public function setOptionValueId(int $optionValueId): self
    {
        $this->optionValueId = $optionValueId;

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

    public function getSubtract(): ?bool
    {
        return $this->subtract;
    }

    public function setSubtract(bool $subtract): self
    {
        $this->subtract = $subtract;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPricePrefix(): ?string
    {
        return $this->pricePrefix;
    }

    public function setPricePrefix(string $pricePrefix): self
    {
        $this->pricePrefix = $pricePrefix;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getPointsPrefix(): ?string
    {
        return $this->pointsPrefix;
    }

    public function setPointsPrefix(string $pointsPrefix): self
    {
        $this->pointsPrefix = $pointsPrefix;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeightPrefix(): ?string
    {
        return $this->weightPrefix;
    }

    public function setWeightPrefix(string $weightPrefix): self
    {
        $this->weightPrefix = $weightPrefix;

        return $this;
    }


}
