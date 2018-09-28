<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnReason
 *
 * @ORM\Table(name="oc_return_reason")
 * @ORM\Entity
 */
class OcReturnReason
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_reason_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnReasonId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    public function getReturnReasonId(): ?int
    {
        return $this->returnReasonId;
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
