<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcBannerImageDescription
 *
 * @ORM\Table(name="oc_banner_image_description")
 * @ORM\Entity
 */
class OcBannerImageDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="banner_image_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bannerImageId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="banner_id", type="integer", nullable=false)
     */
    private $bannerId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title;

    public function getBannerImageId(): ?int
    {
        return $this->bannerImageId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }


}
