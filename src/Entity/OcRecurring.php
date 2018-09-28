<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcRecurring
 *
 * @ORM\Table(name="oc_recurring")
 * @ORM\Entity
 */
class OcRecurring
{
    /**
     * @var int
     *
     * @ORM\Column(name="recurring_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recurringId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="frequency", type="string", length=0, nullable=false)
     */
    private $frequency;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $duration;

    /**
     * @var int
     *
     * @ORM\Column(name="cycle", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $cycle;

    /**
     * @var bool
     *
     * @ORM\Column(name="trial_status", type="boolean", nullable=false)
     */
    private $trialStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $trialPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="trial_frequency", type="string", length=0, nullable=false)
     */
    private $trialFrequency;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_duration", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trialDuration;

    /**
     * @var int
     *
     * @ORM\Column(name="trial_cycle", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $trialCycle;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    public function getRecurringId(): ?int
    {
        return $this->recurringId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getFrequency(): ?string
    {
        return $this->frequency;
    }

    public function setFrequency(string $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getCycle(): ?int
    {
        return $this->cycle;
    }

    public function setCycle(int $cycle): self
    {
        $this->cycle = $cycle;

        return $this;
    }

    public function getTrialStatus(): ?bool
    {
        return $this->trialStatus;
    }

    public function setTrialStatus(bool $trialStatus): self
    {
        $this->trialStatus = $trialStatus;

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

    public function getTrialFrequency(): ?string
    {
        return $this->trialFrequency;
    }

    public function setTrialFrequency(string $trialFrequency): self
    {
        $this->trialFrequency = $trialFrequency;

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

    public function getTrialCycle(): ?int
    {
        return $this->trialCycle;
    }

    public function setTrialCycle(int $trialCycle): self
    {
        $this->trialCycle = $trialCycle;

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

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
