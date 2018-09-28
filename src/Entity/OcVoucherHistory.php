<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcVoucherHistory
 *
 * @ORM\Table(name="oc_voucher_history")
 * @ORM\Entity
 */
class OcVoucherHistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="voucher_history_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $voucherHistoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="voucher_id", type="integer", nullable=false)
     */
    private $voucherId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    public function getVoucherHistoryId(): ?int
    {
        return $this->voucherHistoryId;
    }

    public function getVoucherId(): ?int
    {
        return $this->voucherId;
    }

    public function setVoucherId(int $voucherId): self
    {
        $this->voucherId = $voucherId;

        return $this;
    }

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount): self
    {
        $this->amount = $amount;

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
