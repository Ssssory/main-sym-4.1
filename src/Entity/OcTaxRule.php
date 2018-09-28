<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcTaxRule
 *
 * @ORM\Table(name="oc_tax_rule")
 * @ORM\Entity
 */
class OcTaxRule
{
    /**
     * @var int
     *
     * @ORM\Column(name="tax_rule_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taxRuleId;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId;

    /**
     * @var int
     *
     * @ORM\Column(name="tax_rate_id", type="integer", nullable=false)
     */
    private $taxRateId;

    /**
     * @var string
     *
     * @ORM\Column(name="based", type="string", length=10, nullable=false)
     */
    private $based;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default"="1"})
     */
    private $priority = '1';

    public function getTaxRuleId(): ?int
    {
        return $this->taxRuleId;
    }

    public function getTaxClassId(): ?int
    {
        return $this->taxClassId;
    }

    public function setTaxClassId(int $taxClassId): self
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    public function getTaxRateId(): ?int
    {
        return $this->taxRateId;
    }

    public function setTaxRateId(int $taxRateId): self
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    public function getBased(): ?string
    {
        return $this->based;
    }

    public function setBased(string $based): self
    {
        $this->based = $based;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }


}
