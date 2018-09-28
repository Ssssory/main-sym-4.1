<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnAction
 *
 * @ORM\Table(name="oc_return_action")
 * @ORM\Entity
 */
class OcReturnAction
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_action_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnActionId;

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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    public function getReturnActionId(): ?int
    {
        return $this->returnActionId;
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
