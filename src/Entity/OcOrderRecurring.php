<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOrderRecurring
 *
 * @ORM\Table(name="oc_order_recurring")
 * @ORM\Entity
 */
class OcOrderRecurring
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_recurring_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderRecurringId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=255, nullable=false)
     */
    private $productName;

    /**
     * @var int
     *
     * @ORM\Column(name="product_quantity", type="integer", nullable=false)
     */
    private $productQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     */
    private $recurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_name", type="string", length=255, nullable=false)
     */
    private $recurringName;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_description", type="string", length=255, nullable=false)
     */
    private $recurringDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_frequency", type="string", length=25, nullable=false)
     */
    private $recurringFrequency;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_cycle", type="smallint", nullable=false)
     */
    private $recurringCycle;

    /**
     * @var int
     *
     * @ORM\Column(name="recurring_duration", type="smallint", nullable=false)
     */
    private $recurringDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $recurringPrice;

    /**
     * @var bool
     *
     * @ORM\Column(name="trial", type="boolean", nullable=false)
     */
    private $trial;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_frequency", type="string", length=25, nullable=false)
     */
    private $trialFrequency;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_cycle", type="smallint", nullable=false)
     */
    private $trialCycle;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_duration", type="smallint", nullable=false)
     */
    private $trialDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $trialPrice;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    public function getOrderRecurringId(): ?int
    {
        return $this->orderRecurringId;
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

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(int $productQuantity): self
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getRecurringId(): ?int
    {
        return $this->recurringId;
    }

    public function setRecurringId(int $recurringId): self
    {
        $this->recurringId = $recurringId;

        return $this;
    }

    public function getRecurringName(): ?string
    {
        return $this->recurringName;
    }

    public function setRecurringName(string $recurringName): self
    {
        $this->recurringName = $recurringName;

        return $this;
    }

    public function getRecurringDescription(): ?string
    {
        return $this->recurringDescription;
    }

    public function setRecurringDescription(string $recurringDescription): self
    {
        $this->recurringDescription = $recurringDescription;

        return $this;
    }

    public function getRecurringFrequency(): ?string
    {
        return $this->recurringFrequency;
    }

    public function setRecurringFrequency(string $recurringFrequency): self
    {
        $this->recurringFrequency = $recurringFrequency;

        return $this;
    }

    public function getRecurringCycle(): ?int
    {
        return $this->recurringCycle;
    }

    public function setRecurringCycle(int $recurringCycle): self
    {
        $this->recurringCycle = $recurringCycle;

        return $this;
    }

    public function getRecurringDuration(): ?int
    {
        return $this->recurringDuration;
    }

    public function setRecurringDuration(int $recurringDuration): self
    {
        $this->recurringDuration = $recurringDuration;

        return $this;
    }

    public function getRecurringPrice()
    {
        return $this->recurringPrice;
    }

    public function setRecurringPrice($recurringPrice): self
    {
        $this->recurringPrice = $recurringPrice;

        return $this;
    }

    public function getTrial(): ?bool
    {
        return $this->trial;
    }

    public function setTrial(bool $trial): self
    {
        $this->trial = $trial;

        return $this;
    }

    public function getTrialFrequency(): ?string
    {
        return $this->trialFrequency;
    }

    public function setTrialFrequency(string $trialFrequency): self
    {
        $this->trialFrequency = $trialFrequency;

        return $this;
    }

    public function getTrialCycle(): ?int
    {
        return $this->trialCycle;
    }

    public function setTrialCycle(int $trialCycle): self
    {
        $this->trialCycle = $trialCycle;

        return $this;
    }

    public function getTrialDuration(): ?int
    {
        return $this->trialDuration;
    }

    public function setTrialDuration(int $trialDuration): self
    {
        $this->trialDuration = $trialDuration;

        return $this;
    }

    public function getTrialPrice()
    {
        return $this->trialPrice;
    }

    public function setTrialPrice($trialPrice): self
    {
        $this->trialPrice = $trialPrice;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

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
