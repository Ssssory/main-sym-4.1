<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcInformationToLayout
 *
 * @ORM\Table(name="oc_information_to_layout")
 * @ORM\Entity
 */
class OcInformationToLayout
{
    /**
     * @var int
     *
     * @ORM\Column(name="information_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $informationId;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $storeId;

    /**
     * @var int
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=false)
     */
    private $layoutId;

    public function getInformationId(): ?int
    {
        return $this->informationId;
    }

    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    public function getLayoutId(): ?int
    {
        return $this->layoutId;
    }

    public function setLayoutId(int $layoutId): self
    {
        $this->layoutId = $layoutId;

        return $this;
    }


}
