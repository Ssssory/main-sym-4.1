<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAddressSimpleFields
 *
 * @ORM\Table(name="oc_address_simple_fields")
 * @ORM\Entity
 */
class OcAddressSimpleFields
{
    /**
     * @var int
     *
     * @ORM\Column(name="address_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="metadata", type="text", length=65535, nullable=true)
     */
    private $metadata;

    public function getAddressId(): ?int
    {
        return $this->addressId;
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
