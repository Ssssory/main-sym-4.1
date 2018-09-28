<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProductAttribute
 *
 * @ORM\Table(name="oc_product_attribute")
 * @ORM\Entity
 */
class OcProductAttribute
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $attributeId;

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
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
