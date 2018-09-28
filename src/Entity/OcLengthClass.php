<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLengthClass
 *
 * @ORM\Table(name="oc_length_class")
 * @ORM\Entity
 */
class OcLengthClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="length_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lengthClassId;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=8, nullable=false)
     */
    private $value;

    public function getLengthClassId(): ?int
    {
        return $this->lengthClassId;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }


}
