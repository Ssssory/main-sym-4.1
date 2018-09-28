<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiInfo
 *
 * @ORM\Table(name="oc_li_info", indexes={@ORM\Index(name="tag", columns={"tag"}), @ORM\Index(name="donor_id", columns={"donor_id"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="info", columns={"info"})})
 * @ORM\Entity
 */
class OcLiInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="info_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $infoId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="donor_id", type="integer", nullable=true)
     */
    private $donorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=32, nullable=true)
     */
    private $tag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info", type="string", length=2000, nullable=true)
     */
    private $info;

    public function getInfoId(): ?int
    {
        return $this->infoId;
    }

    public function getDonorId(): ?int
    {
        return $this->donorId;
    }

    public function setDonorId(?int $donorId): self
    {
        $this->donorId = $donorId;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }


}
