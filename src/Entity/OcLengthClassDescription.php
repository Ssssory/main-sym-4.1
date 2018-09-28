<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLengthClassDescription
 *
 * @ORM\Table(name="oc_length_class_description")
 * @ORM\Entity
 */
class OcLengthClassDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="length_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lengthClassId;

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
     * @ORM\Column(name="title", type="string", length=32, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=4, nullable=false)
     */
    private $unit;

    public function getLengthClassId(): ?int
    {
        return $this->lengthClassId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
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

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }


}
