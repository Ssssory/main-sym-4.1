<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryToStore
 *
 * @ORM\Table(name="oc_category_to_store")
 * @ORM\Entity
 */
class OcCategoryToStore
{
    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId;

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getStoreId(): ?int
    {
        return $this->storeId;
    }


}
