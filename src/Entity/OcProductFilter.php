<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductFilter
 *
 * @ORM\Table(name="oc_product_filter")
 * @ORM\Entity
 */
class OcProductFilter
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
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filterId;

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getFilterId(): ?int
    {
        return $this->filterId;
    }


}
