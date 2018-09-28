<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcFilter
 *
 * @ORM\Table(name="oc_filter")
 * @ORM\Entity
 */
class OcFilter
{
    /**
     * @var int
     *
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filterId;

    /**
     * @var int
     *
     * @ORM\Column(name="filter_group_id", type="integer", nullable=false)
     */
    private $filterGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    public function getFilterId(): ?int
    {
        return $this->filterId;
    }

    public function getFilterGroupId(): ?int
    {
        return $this->filterGroupId;
    }

    public function setFilterGroupId(int $filterGroupId): self
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
