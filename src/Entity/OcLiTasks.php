<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiTasks
 *
 * @ORM\Table(name="oc_li_tasks", indexes={@ORM\Index(name="ins_id", columns={"ins_id"}), @ORM\Index(name="donor_id", columns={"donor_id"}), @ORM\Index(name="url", columns={"url"}), @ORM\Index(name="entity", columns={"entity"}), @ORM\Index(name="z_order", columns={"z_order"})})
 * @ORM\Entity
 */
class OcLiTasks
{
    /**
     * @var int
     *
     * @ORM\Column(name="task_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ins_id", type="integer", nullable=true)
     */
    private $insId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="donor_id", type="integer", nullable=true)
     */
    private $donorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="z_order", type="integer", nullable=true)
     */
    private $zOrder = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=2000, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entity", type="string", length=64, nullable=true)
     */
    private $entity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="info", type="text", length=65535, nullable=true)
     */
    private $info;

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function getInsId(): ?int
    {
        return $this->insId;
    }

    public function setInsId(?int $insId): self
    {
        $this->insId = $insId;

        return $this;
    }

    public function getDonorId(): ?int
    {
        return $this->donorId;
    }

    public function setDonorId(?int $donorId): self
    {
        $this->donorId = $donorId;

        return $this;
    }

    public function getZOrder(): ?int
    {
        return $this->zOrder;
    }

    public function setZOrder(?int $zOrder): self
    {
        $this->zOrder = $zOrder;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(?string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }


}
