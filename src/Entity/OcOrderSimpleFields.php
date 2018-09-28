<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderSimpleFields
 *
 * @ORM\Table(name="oc_order_simple_fields")
 * @ORM\Entity
 */
class OcOrderSimpleFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metadata", type="text", length=65535, nullable=true)
     */
    private $metadata;

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function getMetadata(): ?string
    {
        return $this->metadata;
    }

    public function setMetadata(?string $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }


}
