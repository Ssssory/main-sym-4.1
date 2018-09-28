<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryFilter
 *
 * @ORM\Table(name="oc_category_filter")
 * @ORM\Entity
 */
class OcCategoryFilter
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
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filterId;

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getFilterId(): ?int
    {
        return $this->filterId;
    }


}
