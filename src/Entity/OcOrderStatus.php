<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderStatus
 *
 * @ORM\Table(name="oc_order_status")
 * @ORM\Entity
 */
class OcOrderStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderStatusId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    public function getOrderStatusId(): ?int
    {
        return $this->orderStatusId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
