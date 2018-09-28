<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcInformation
 *
 * @ORM\Table(name="oc_information")
 * @ORM\Entity
 */
class OcInformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="information_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $informationId;

    /**
     * @var int
     *
     * @ORM\Column(name="bottom", type="integer", nullable=false)
     */
    private $bottom = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    public function getInformationId(): ?int
    {
        return $this->informationId;
    }

    public function getBottom(): ?int
    {
        return $this->bottom;
    }

    public function setBottom(int $bottom): self
    {
        $this->bottom = $bottom;

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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }


}
