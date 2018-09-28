<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcReturnHistory
 *
 * @ORM\Table(name="oc_return_history")
 * @ORM\Entity
 */
class OcReturnHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="return_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $returnHistoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="return_id", type="integer", nullable=false)
     */
    private $returnId;

    /**
     * @var int
     *
     * @ORM\Column(name="return_status_id", type="integer", nullable=false)
     */
    private $returnStatusId;

    /**
     * @var bool
     *
     * @ORM\Column(name="notify", type="boolean", nullable=false)
     */
    private $notify;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    public function getReturnHistoryId(): ?int
    {
        return $this->returnHistoryId;
    }

    public function getReturnId(): ?int
    {
        return $this->returnId;
    }

    public function setReturnId(int $returnId): self
    {
        $this->returnId = $returnId;

        return $this;
    }

    public function getReturnStatusId(): ?int
    {
        return $this->returnStatusId;
    }

    public function setReturnStatusId(int $returnStatusId): self
    {
        $this->returnStatusId = $returnStatusId;

        return $this;
    }

    public function getNotify(): ?bool
    {
        return $this->notify;
    }

    public function setNotify(bool $notify): self
    {
        $this->notify = $notify;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }


}
