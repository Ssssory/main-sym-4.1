<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiIns
 *
 * @ORM\Table(name="oc_li_ins", indexes={@ORM\Index(name="donor_id", columns={"donor_id"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class OcLiIns
{
    /**
     * @var int
     *
     * @ORM\Column(name="ins_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $insId;

    /**
     * @var int
     *
     * @ORM\Column(name="donor_id", type="integer", nullable=false)
     */
    private $donorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categories", type="string", length=128, nullable=true)
     */
    private $categories = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="manufacturer", type="integer", nullable=true)
     */
    private $manufacturer = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="string", length=512, nullable=true)
     */
    private $price;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="status", type="boolean", nullable=true, options={"default"="1"})
     */
    private $status = '1';

    public function getInsId(): ?int
    {
        return $this->insId;
    }

    public function getDonorId(): ?int
    {
        return $this->donorId;
    }

    public function setDonorId(int $donorId): self
    {
        $this->donorId = $donorId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

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

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function setCategories(?string $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getManufacturer(): ?int
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?int $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }


}
