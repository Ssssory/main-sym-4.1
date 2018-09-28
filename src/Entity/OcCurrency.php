<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCurrency
 *
 * @ORM\Table(name="oc_currency")
 * @ORM\Entity
 */
class OcCurrency
{
    /**
     * @var int
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $currencyId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=32, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol_left", type="string", length=12, nullable=false)
     */
    private $symbolLeft;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol_right", type="string", length=12, nullable=false)
     */
    private $symbolRight;

    /**
     * @var string
     *
     * @ORM\Column(name="decimal_place", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $decimalPlace;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="float", precision=15, scale=8, nullable=false)
     */
    private $value;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;

    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getSymbolLeft(): ?string
    {
        return $this->symbolLeft;
    }

    public function setSymbolLeft(string $symbolLeft): self
    {
        $this->symbolLeft = $symbolLeft;

        return $this;
    }

    public function getSymbolRight(): ?string
    {
        return $this->symbolRight;
    }

    public function setSymbolRight(string $symbolRight): self
    {
        $this->symbolRight = $symbolRight;

        return $this;
    }

    public function getDecimalPlace(): ?string
    {
        return $this->decimalPlace;
    }

    public function setDecimalPlace(string $decimalPlace): self
    {
        $this->decimalPlace = $decimalPlace;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

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

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }


}
