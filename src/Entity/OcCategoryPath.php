<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCategoryPath
 *
 * @ORM\Table(name="oc_category_path")
 * @ORM\Entity
 */
class OcCategoryPath
{
    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="path_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pathId;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function getPathId(): ?int
    {
        return $this->pathId;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }


}
