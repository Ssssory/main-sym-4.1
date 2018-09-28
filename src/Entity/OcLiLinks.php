<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiLinks
 *
 * @ORM\Table(name="oc_li_links", indexes={@ORM\Index(name="ins_id", columns={"ins_id"}), @ORM\Index(name="donor_id", columns={"donor_id"}), @ORM\Index(name="url", columns={"url"})})
 * @ORM\Entity
 */
class OcLiLinks
{
    /**
     * @var int
     *
     * @ORM\Column(name="link_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $linkId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="donor_id", type="integer", nullable=true)
     */
    private $donorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ins_id", type="integer", nullable=true)
     */
    private $insId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=2000, nullable=true)
     */
    private $url;

    public function getLinkId(): ?int
    {
        return $this->linkId;
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

    public function getInsId(): ?int
    {
        return $this->insId;
    }

    public function setInsId(?int $insId): self
    {
        $this->insId = $insId;

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


}
