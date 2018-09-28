<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherThemeDescription
 *
 * @ORM\Table(name="oc_voucher_theme_description")
 * @ORM\Entity
 */
class OcVoucherThemeDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="voucher_theme_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $voucherThemeId;

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

    public function getVoucherThemeId(): ?int
    {
        return $this->voucherThemeId;
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
