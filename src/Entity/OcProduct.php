<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcProduct
 *
 * @ORM\Table(name="oc_product")
 * @ORM\Entity
 */
class OcProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=64, nullable=false)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="upc", type="string", length=12, nullable=false)
     */
    private $upc;

    /**
     * @var string
     *
     * @ORM\Column(name="ean", type="string", length=14, nullable=false)
     */
    private $ean;

    /**
     * @var string
     *
     * @ORM\Column(name="jan", type="string", length=13, nullable=false)
     */
    private $jan;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=17, nullable=false)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="mpn", type="string", length=64, nullable=false)
     */
    private $mpn;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=false)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="stock_status_id", type="integer", nullable=false)
     */
    private $stockStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturer_id", type="integer", nullable=false)
     */
    private $manufacturerId;

    /**
     * @var bool
     *
     * @ORM\Column(name="shipping", type="boolean", nullable=false, options={"default"="1"})
     */
    private $shipping = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $price = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="purchase", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $purchase;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_available", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $dateAvailable = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $weight = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="weight_class_id", type="integer", nullable=false)
     */
    private $weightClassId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $length = '0.00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="width", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $width = '0.00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="height", type="decimal", precision=15, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $height = '0.00000000';

    /**
     * @var int
     *
     * @ORM\Column(name="length_class_id", type="integer", nullable=false)
     */
    private $lengthClassId = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="subtract", type="boolean", nullable=false, options={"default"="1"})
     */
    private $subtract = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="minimum", type="integer", nullable=false, options={"default"="1"})
     */
    private $minimum = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed = '0';

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

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(string $upc): self
    {
        $this->upc = $upc;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getJan(): ?string
    {
        return $this->jan;
    }

    public function setJan(string $jan): self
    {
        $this->jan = $jan;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(string $mpn): self
    {
        $this->mpn = $mpn;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getStockStatusId(): ?int
    {
        return $this->stockStatusId;
    }

    public function setStockStatusId(int $stockStatusId): self
    {
        $this->stockStatusId = $stockStatusId;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getManufacturerId(): ?int
    {
        return $this->manufacturerId;
    }

    public function setManufacturerId(int $manufacturerId): self
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    public function getShipping(): ?bool
    {
        return $this->shipping;
    }

    public function setShipping(bool $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
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

    public function getPurchase()
    {
        return $this->purchase;
    }

    public function setPurchase($purchase): self
    {
        $this->purchase = $purchase;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
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

    public function getDateAvailable(): ?\DateTimeInterface
    {
        return $this->dateAvailable;
    }

    public function setDateAvailable(\DateTimeInterface $dateAvailable): self
    {
        $this->dateAvailable = $dateAvailable;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeightClassId(): ?int
    {
        return $this->weightClassId;
    }

    public function setWeightClassId(int $weightClassId): self
    {
        $this->weightClassId = $weightClassId;

        return $this;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getLengthClassId(): ?int
    {
        return $this->lengthClassId;
    }

    public function setLengthClassId(int $lengthClassId): self
    {
        $this->lengthClassId = $lengthClassId;

        return $this;
    }

    public function getSubtract(): ?bool
    {
        return $this->subtract;
    }

    public function setSubtract(bool $subtract): self
    {
        $this->subtract = $subtract;

        return $this;
    }

    public function getMinimum(): ?int
    {
        return $this->minimum;
    }

    public function setMinimum(int $minimum): self
    {
        $this->minimum = $minimum;

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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getViewed(): ?int
    {
        return $this->viewed;
    }

    public function setViewed(int $viewed): self
    {
        $this->viewed = $viewed;

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
