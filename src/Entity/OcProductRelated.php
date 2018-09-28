<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductRelated
 *
 * @ORM\Table(name="oc_product_related")
 * @ORM\Entity
 */
class OcProductRelated
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
     * @ORM\Column(name="related_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $relatedId;

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getRelatedId(): ?int
    {
        return $this->relatedId;
    }


}
