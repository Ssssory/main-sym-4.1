<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcBannerImage
 *
 * @ORM\Table(name="oc_banner_image")
 * @ORM\Entity
 */
class OcBannerImage
{
    /**
     * @var int
     *
     * @ORM\Column(name="banner_image_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannerImageId;

    /**
     * @var int
     *
     * @ORM\Column(name="banner_id", type="integer", nullable=false)
     */
    private $bannerId;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';

    public function getBannerImageId(): ?int
    {
        return $this->bannerImageId;
    }

    public function getBannerId(): ?int
    {
        return $this->bannerId;
    }

    public function setBannerId(int $bannerId): self
    {
        $this->bannerId = $bannerId;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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


}
