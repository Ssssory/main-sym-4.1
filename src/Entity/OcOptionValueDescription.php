<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOptionValueDescription
 *
 * @ORM\Table(name="oc_option_value_description")
 * @ORM\Entity
 */
class OcOptionValueDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="option_value_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $optionValueId;

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
     * @ORM\Column(name="option_id", type="integer", nullable=false)
     */
    private $optionId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    public function getOptionValueId(): ?int
    {
        return $this->optionValueId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getOptionId(): ?int
    {
        return $this->optionId;
    }

    public function setOptionId(int $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
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
