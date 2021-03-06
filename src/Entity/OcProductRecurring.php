<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductRecurring
 *
 * @ORM\Table(name="oc_product_recurring")
 * @ORM\Entity
 */
class OcProductRecurring
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
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $recurringId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerGroupId;

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getRecurringId(): ?int
    {
        return $this->recurringId;
    }

    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }


}
