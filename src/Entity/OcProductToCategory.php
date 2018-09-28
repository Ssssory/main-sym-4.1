<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductToCategory
 *
 * @ORM\Table(name="oc_product_to_category", indexes={@ORM\Index(name="category_id", columns={"category_id"})})
 * @ORM\Entity
 */
class OcProductToCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;

    /**
     * @var bool
     *
     * @ORM\Column(name="main_category", type="boolean", nullable=false)
     */
    private $mainCategory = '0';

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getMainCategory(): ?bool
    {
        return $this->mainCategory;
    }

    public function setMainCategory(bool $mainCategory): self
    {
        $this->mainCategory = $mainCategory;

        return $this;
    }


}
