<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcFilterDescription
 *
 * @ORM\Table(name="oc_filter_description")
 * @ORM\Entity
 */
class OcFilterDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="filter_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $filterId;

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
     * @ORM\Column(name="filter_group_id", type="integer", nullable=false)
     */
    private $filterGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    public function getFilterId(): ?int
    {
        return $this->filterId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getFilterGroupId(): ?int
    {
        return $this->filterGroupId;
    }

    public function setFilterGroupId(int $filterGroupId): self
    {
        $this->filterGroupId = $filterGroupId;

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
