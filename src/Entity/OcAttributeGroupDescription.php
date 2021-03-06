<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcAttributeGroupDescription
 *
 * @ORM\Table(name="oc_attribute_group_description")
 * @ORM\Entity
 */
class OcAttributeGroupDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="attribute_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $attributeGroupId;

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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    public function getAttributeGroupId(): ?int
    {
        return $this->attributeGroupId;
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
