<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpcAdminNewOrderTmpBackOrder
 *
 * @ORM\Table(name="opc_admin_new_order_tmp_back_order")
 * @ORM\Entity
 */
class OpcAdminNewOrderTmpBackOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="summ", type="integer", nullable=false)
     */
    private $summ;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="card_number", type="integer", nullable=false)
     */
    private $cardNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time_create_card", type="datetime", nullable=false)
     */
    private $dateTimeCreateCard;

    /**
     * @var int
     *
     * @ORM\Column(name="status_card", type="integer", nullable=false)
     */
    private $statusCard;

    /**
     * @var int
     *
     * @ORM\Column(name="oc_customer_customer_id", type="integer", nullable=false)
     */
    private $ocCustomerCustomerId;

    /**
     * @var string
     *
     * @ORM\Column(name="oc_customer_firstname", type="string", length=255, nullable=false)
     */
    private $ocCustomerFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="oc_customer_lastname", type="string", length=255, nullable=false)
     */
    private $ocCustomerLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="oc_customer_email", type="string", length=255, nullable=false)
     */
    private $ocCustomerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="oc_customer_telephone", type="string", length=255, nullable=false)
     */
    private $ocCustomerTelephone;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSumm(): ?int
    {
        return $this->summ;
    }

    public function setSumm(int $summ): self
    {
        $this->summ = $summ;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCardNumber(): ?int
    {
        return $this->cardNumber;
    }

    public function setCardNumber(int $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getDateTimeCreateCard(): ?\DateTimeInterface
    {
        return $this->dateTimeCreateCard;
    }

    public function setDateTimeCreateCard(\DateTimeInterface $dateTimeCreateCard): self
    {
        $this->dateTimeCreateCard = $dateTimeCreateCard;

        return $this;
    }

    public function getStatusCard(): ?int
    {
        return $this->statusCard;
    }

    public function setStatusCard(int $statusCard): self
    {
        $this->statusCard = $statusCard;

        return $this;
    }

    public function getOcCustomerCustomerId(): ?int
    {
        return $this->ocCustomerCustomerId;
    }

    public function setOcCustomerCustomerId(int $ocCustomerCustomerId): self
    {
        $this->ocCustomerCustomerId = $ocCustomerCustomerId;

        return $this;
    }

    public function getOcCustomerFirstname(): ?string
    {
        return $this->ocCustomerFirstname;
    }

    public function setOcCustomerFirstname(string $ocCustomerFirstname): self
    {
        $this->ocCustomerFirstname = $ocCustomerFirstname;

        return $this;
    }

    public function getOcCustomerLastname(): ?string
    {
        return $this->ocCustomerLastname;
    }

    public function setOcCustomerLastname(string $ocCustomerLastname): self
    {
        $this->ocCustomerLastname = $ocCustomerLastname;

        return $this;
    }

    public function getOcCustomerEmail(): ?string
    {
        return $this->ocCustomerEmail;
    }

    public function setOcCustomerEmail(string $ocCustomerEmail): self
    {
        $this->ocCustomerEmail = $ocCustomerEmail;

        return $this;
    }

    public function getOcCustomerTelephone(): ?string
    {
        return $this->ocCustomerTelephone;
    }

    public function setOcCustomerTelephone(string $ocCustomerTelephone): self
    {
        $this->ocCustomerTelephone = $ocCustomerTelephone;

        return $this;
    }


}
