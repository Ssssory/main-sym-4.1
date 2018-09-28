<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomerGroup
 *
 * @ORM\Table(name="oc_customer_group")
 * @ORM\Entity
 */
class OcCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="approval", type="integer", nullable=false)
     */
    private $approval;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }

    public function getApproval(): ?int
    {
        return $this->approval;
    }

    public function setApproval(int $approval): self
    {
        $this->approval = $approval;

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
