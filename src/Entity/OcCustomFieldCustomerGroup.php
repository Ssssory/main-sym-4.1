<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCustomFieldCustomerGroup
 *
 * @ORM\Table(name="oc_custom_field_customer_group")
 * @ORM\Entity
 */
class OcCustomFieldCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="custom_field_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customFieldId;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $customerGroupId;

    /**
     * @var bool
     *
     * @ORM\Column(name="required", type="boolean", nullable=false)
     */
    private $required;

    public function getCustomFieldId(): ?int
    {
        return $this->customFieldId;
    }

    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): self
    {
        $this->required = $required;

        return $this;
    }


}
