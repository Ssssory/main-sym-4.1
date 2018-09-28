<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiEntities
 *
 * @ORM\Table(name="oc_li_entities", indexes={@ORM\Index(name="platform_id", columns={"platform_id"}), @ORM\Index(name="ins_id", columns={"ins_id"}), @ORM\Index(name="url", columns={"url"}), @ORM\Index(name="donor_id", columns={"donor_id"}), @ORM\Index(name="status", columns={"status"}), @ORM\Index(name="entity", columns={"entity"})})
 * @ORM\Entity
 */
class OcLiEntities
{
    /**
     * @var int
     *
     * @ORM\Column(name="entity_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entityId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="platform_id", type="integer", nullable=true)
     */
    private $platformId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ins_id", type="integer", nullable=true)
     */
    private $insId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="donor_id", type="integer", nullable=true)
     */
    private $donorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=2000, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ourl", type="string", length=2000, nullable=true)
     */
    private $ourl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entity", type="string", length=64, nullable=true)
     */
    private $entity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;

        return $this;
    }

    public function getInsId(): ?int
    {
        return $this->insId;
    }

    public function setInsId(?int $insId): self
    {
        $this->insId = $insId;

        return $this;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getOurl(): ?string
    {
        return $this->ourl;
    }

    public function setOurl(?string $ourl): self
    {
        $this->ourl = $ourl;

        return $this;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(?string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
