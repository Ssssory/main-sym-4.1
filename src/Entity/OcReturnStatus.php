<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnStatus
 *
 * @ORM\Table(name="oc_return_status")
 * @ORM\Entity
 */
class OcReturnStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $returnStatusId;

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
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    public function getReturnStatusId(): ?int
    {
        return $this->returnStatusId;
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
