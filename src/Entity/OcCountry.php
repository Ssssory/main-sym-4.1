<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcCountry
 *
 * @ORM\Table(name="oc_country")
 * @ORM\Entity
 */
class OcCountry
{
    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $countryId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_2", type="string", length=2, nullable=false)
     */
    private $isoCode2;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code_3", type="string", length=3, nullable=false)
     */
    private $isoCode3;

    /**
     * @var string
     *
     * @ORM\Column(name="address_format", type="text", length=65535, nullable=false)
     */
    private $addressFormat;

    /**
     * @var bool
     *
     * @ORM\Column(name="postcode_required", type="boolean", nullable=false)
     */
    private $postcodeRequired;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    public function getCountryId(): ?int
    {
        return $this->countryId;
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

    public function getIsoCode2(): ?string
    {
        return $this->isoCode2;
    }

    public function setIsoCode2(string $isoCode2): self
    {
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    public function getIsoCode3(): ?string
    {
        return $this->isoCode3;
    }

    public function setIsoCode3(string $isoCode3): self
    {
        $this->isoCode3 = $isoCode3;

        return $this;
    }

    public function getAddressFormat(): ?string
    {
        return $this->addressFormat;
    }

    public function setAddressFormat(string $addressFormat): self
    {
        $this->addressFormat = $addressFormat;

        return $this;
    }

    public function getPostcodeRequired(): ?bool
    {
        return $this->postcodeRequired;
    }

    public function setPostcodeRequired(bool $postcodeRequired): self
    {
        $this->postcodeRequired = $postcodeRequired;

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


}
