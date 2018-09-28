<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcZoneToGeoZone
 *
 * @ORM\Table(name="oc_zone_to_geo_zone")
 * @ORM\Entity
 */
class OcZoneToGeoZone
{
    /**
     * @var int
     *
     * @ORM\Column(name="zone_to_geo_zone_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zoneToGeoZoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var int
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=false)
     */
    private $zoneId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="geo_zone_id", type="integer", nullable=false)
     */
    private $geoZoneId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;

    public function getZoneToGeoZoneId(): ?int
    {
        return $this->zoneToGeoZoneId;
    }

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function setCountryId(int $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getZoneId(): ?int
    {
        return $this->zoneId;
    }

    public function setZoneId(int $zoneId): self
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    public function getGeoZoneId(): ?int
    {
        return $this->geoZoneId;
    }

    public function setGeoZoneId(int $geoZoneId): self
    {
        $this->geoZoneId = $geoZoneId;

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
