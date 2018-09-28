<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderRecurringTransaction
 *
 * @ORM\Table(name="oc_order_recurring_transaction")
 * @ORM\Entity
 */
class OcOrderRecurringTransaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_recurring_transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderRecurringTransactionId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_recurring_id", type="integer", nullable=false)
     */
    private $orderRecurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    public function getOrderRecurringTransactionId(): ?int
    {
        return $this->orderRecurringTransactionId;
    }

    public function getOrderRecurringId(): ?int
    {
        return $this->orderRecurringId;
    }

    public function setOrderRecurringId(int $orderRecurringId): self
    {
        $this->orderRecurringId = $orderRecurringId;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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
