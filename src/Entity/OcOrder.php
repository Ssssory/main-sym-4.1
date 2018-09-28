<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcOrder
 *
 * @ORM\Table(name="oc_order")
 * @ORM\Entity
 */
class OcOrder
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="invoice_no", type="integer", nullable=false)
     */
    private $invoiceNo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_prefix", type="string", length=26, nullable=false)
     */
    private $invoicePrefix;

    /**
     * @var int
     *
     * @ORM\Column(name="store_id", type="integer", nullable=false)
     */
    private $storeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="store_name", type="string", length=64, nullable=false)
     */
    private $storeName;

    /**
     * @var string
     *
     * @ORM\Column(name="store_url", type="string", length=255, nullable=false)
     */
    private $storeUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=false)
     */
    private $customerId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="customer_group_id", type="integer", nullable=false)
     */
    private $customerGroupId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=32, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=32, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=96, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=32, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=32, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_field", type="text", length=65535, nullable=false)
     */
    private $customField;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_firstname", type="string", length=32, nullable=false)
     */
    private $paymentFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_lastname", type="string", length=32, nullable=false)
     */
    private $paymentLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_company", type="string", length=40, nullable=false)
     */
    private $paymentCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_1", type="string", length=128, nullable=false)
     */
    private $paymentAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_2", type="string", length=128, nullable=false)
     */
    private $paymentAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_city", type="string", length=128, nullable=false)
     */
    private $paymentCity;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_postcode", type="string", length=10, nullable=false)
     */
    private $paymentPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_country", type="string", length=128, nullable=false)
     */
    private $paymentCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_country_id", type="integer", nullable=false)
     */
    private $paymentCountryId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_zone", type="string", length=128, nullable=false)
     */
    private $paymentZone;

    /**
     * @var int
     *
     * @ORM\Column(name="payment_zone_id", type="integer", nullable=false)
     */
    private $paymentZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_address_format", type="text", length=65535, nullable=false)
     */
    private $paymentAddressFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_custom_field", type="text", length=65535, nullable=false)
     */
    private $paymentCustomField;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="string", length=128, nullable=false)
     */
    private $paymentMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_code", type="string", length=128, nullable=false)
     */
    private $paymentCode;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_firstname", type="string", length=32, nullable=false)
     */
    private $shippingFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_lastname", type="string", length=32, nullable=false)
     */
    private $shippingLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_company", type="string", length=40, nullable=false)
     */
    private $shippingCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_1", type="string", length=128, nullable=false)
     */
    private $shippingAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_2", type="string", length=128, nullable=false)
     */
    private $shippingAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_city", type="string", length=128, nullable=false)
     */
    private $shippingCity;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_postcode", type="string", length=10, nullable=false)
     */
    private $shippingPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_country", type="string", length=128, nullable=false)
     */
    private $shippingCountry;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_country_id", type="integer", nullable=false)
     */
    private $shippingCountryId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_zone", type="string", length=128, nullable=false)
     */
    private $shippingZone;

    /**
     * @var int
     *
     * @ORM\Column(name="shipping_zone_id", type="integer", nullable=false)
     */
    private $shippingZoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address_format", type="text", length=65535, nullable=false)
     */
    private $shippingAddressFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_custom_field", type="text", length=65535, nullable=false)
     */
    private $shippingCustomField;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_method", type="string", length=128, nullable=false)
     */
    private $shippingMethod;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_code", type="string", length=128, nullable=false)
     */
    private $shippingCode;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="order_status_id", type="integer", nullable=false)
     */
    private $orderStatusId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="affiliate_id", type="integer", nullable=false)
     */
    private $affiliateId;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $commission;

    /**
     * @var int
     *
     * @ORM\Column(name="marketing_id", type="integer", nullable=false)
     */
    private $marketingId;

    /**
     * @var string
     *
     * @ORM\Column(name="tracking", type="string", length=64, nullable=false)
     */
    private $tracking;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     */
    private $currencyId;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=3, nullable=false)
     */
    private $currencyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_value", type="decimal", precision=15, scale=8, nullable=false, options={"default"="1.00000000"})
     */
    private $currencyValue = '1.00000000';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="forwarded_ip", type="string", length=40, nullable=false)
     */
    private $forwardedIp;

    /**
     * @var string
     *
     * @ORM\Column(name="user_agent", type="string", length=255, nullable=false)
     */
    private $userAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="accept_language", type="string", length=255, nullable=false)
     */
    private $acceptLanguage;

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

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }

    public function setInvoiceNo(int $invoiceNo): self
    {
        $this->invoiceNo = $invoiceNo;

        return $this;
    }

    public function getInvoicePrefix(): ?string
    {
        return $this->invoicePrefix;
    }

    public function setInvoicePrefix(string $invoicePrefix): self
    {
        $this->invoicePrefix = $invoicePrefix;

        return $this;
    }

    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    public function setStoreName(string $storeName): self
    {
        $this->storeName = $storeName;

        return $this;
    }

    public function getStoreUrl(): ?string
    {
        return $this->storeUrl;
    }

    public function setStoreUrl(string $storeUrl): self
    {
        $this->storeUrl = $storeUrl;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    public function getCustomerGroupId(): ?int
    {
        return $this->customerGroupId;
    }

    public function setCustomerGroupId(int $customerGroupId): self
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getCustomField(): ?string
    {
        return $this->customField;
    }

    public function setCustomField(string $customField): self
    {
        $this->customField = $customField;

        return $this;
    }

    public function getPaymentFirstname(): ?string
    {
        return $this->paymentFirstname;
    }

    public function setPaymentFirstname(string $paymentFirstname): self
    {
        $this->paymentFirstname = $paymentFirstname;

        return $this;
    }

    public function getPaymentLastname(): ?string
    {
        return $this->paymentLastname;
    }

    public function setPaymentLastname(string $paymentLastname): self
    {
        $this->paymentLastname = $paymentLastname;

        return $this;
    }

    public function getPaymentCompany(): ?string
    {
        return $this->paymentCompany;
    }

    public function setPaymentCompany(string $paymentCompany): self
    {
        $this->paymentCompany = $paymentCompany;

        return $this;
    }

    public function getPaymentAddress1(): ?string
    {
        return $this->paymentAddress1;
    }

    public function setPaymentAddress1(string $paymentAddress1): self
    {
        $this->paymentAddress1 = $paymentAddress1;

        return $this;
    }

    public function getPaymentAddress2(): ?string
    {
        return $this->paymentAddress2;
    }

    public function setPaymentAddress2(string $paymentAddress2): self
    {
        $this->paymentAddress2 = $paymentAddress2;

        return $this;
    }

    public function getPaymentCity(): ?string
    {
        return $this->paymentCity;
    }

    public function setPaymentCity(string $paymentCity): self
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    public function getPaymentPostcode(): ?string
    {
        return $this->paymentPostcode;
    }

    public function setPaymentPostcode(string $paymentPostcode): self
    {
        $this->paymentPostcode = $paymentPostcode;

        return $this;
    }

    public function getPaymentCountry(): ?string
    {
        return $this->paymentCountry;
    }

    public function setPaymentCountry(string $paymentCountry): self
    {
        $this->paymentCountry = $paymentCountry;

        return $this;
    }

    public function getPaymentCountryId(): ?int
    {
        return $this->paymentCountryId;
    }

    public function setPaymentCountryId(int $paymentCountryId): self
    {
        $this->paymentCountryId = $paymentCountryId;

        return $this;
    }

    public function getPaymentZone(): ?string
    {
        return $this->paymentZone;
    }

    public function setPaymentZone(string $paymentZone): self
    {
        $this->paymentZone = $paymentZone;

        return $this;
    }

    public function getPaymentZoneId(): ?int
    {
        return $this->paymentZoneId;
    }

    public function setPaymentZoneId(int $paymentZoneId): self
    {
        $this->paymentZoneId = $paymentZoneId;

        return $this;
    }

    public function getPaymentAddressFormat(): ?string
    {
        return $this->paymentAddressFormat;
    }

    public function setPaymentAddressFormat(string $paymentAddressFormat): self
    {
        $this->paymentAddressFormat = $paymentAddressFormat;

        return $this;
    }

    public function getPaymentCustomField(): ?string
    {
        return $this->paymentCustomField;
    }

    public function setPaymentCustomField(string $paymentCustomField): self
    {
        $this->paymentCustomField = $paymentCustomField;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getPaymentCode(): ?string
    {
        return $this->paymentCode;
    }

    public function setPaymentCode(string $paymentCode): self
    {
        $this->paymentCode = $paymentCode;

        return $this;
    }

    public function getShippingFirstname(): ?string
    {
        return $this->shippingFirstname;
    }

    public function setShippingFirstname(string $shippingFirstname): self
    {
        $this->shippingFirstname = $shippingFirstname;

        return $this;
    }

    public function getShippingLastname(): ?string
    {
        return $this->shippingLastname;
    }

    public function setShippingLastname(string $shippingLastname): self
    {
        $this->shippingLastname = $shippingLastname;

        return $this;
    }

    public function getShippingCompany(): ?string
    {
        return $this->shippingCompany;
    }

    public function setShippingCompany(string $shippingCompany): self
    {
        $this->shippingCompany = $shippingCompany;

        return $this;
    }

    public function getShippingAddress1(): ?string
    {
        return $this->shippingAddress1;
    }

    public function setShippingAddress1(string $shippingAddress1): self
    {
        $this->shippingAddress1 = $shippingAddress1;

        return $this;
    }

    public function getShippingAddress2(): ?string
    {
        return $this->shippingAddress2;
    }

    public function setShippingAddress2(string $shippingAddress2): self
    {
        $this->shippingAddress2 = $shippingAddress2;

        return $this;
    }

    public function getShippingCity(): ?string
    {
        return $this->shippingCity;
    }

    public function setShippingCity(string $shippingCity): self
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    public function getShippingPostcode(): ?string
    {
        return $this->shippingPostcode;
    }

    public function setShippingPostcode(string $shippingPostcode): self
    {
        $this->shippingPostcode = $shippingPostcode;

        return $this;
    }

    public function getShippingCountry(): ?string
    {
        return $this->shippingCountry;
    }

    public function setShippingCountry(string $shippingCountry): self
    {
        $this->shippingCountry = $shippingCountry;

        return $this;
    }

    public function getShippingCountryId(): ?int
    {
        return $this->shippingCountryId;
    }

    public function setShippingCountryId(int $shippingCountryId): self
    {
        $this->shippingCountryId = $shippingCountryId;

        return $this;
    }

    public function getShippingZone(): ?string
    {
        return $this->shippingZone;
    }

    public function setShippingZone(string $shippingZone): self
    {
        $this->shippingZone = $shippingZone;

        return $this;
    }

    public function getShippingZoneId(): ?int
    {
        return $this->shippingZoneId;
    }

    public function setShippingZoneId(int $shippingZoneId): self
    {
        $this->shippingZoneId = $shippingZoneId;

        return $this;
    }

    public function getShippingAddressFormat(): ?string
    {
        return $this->shippingAddressFormat;
    }

    public function setShippingAddressFormat(string $shippingAddressFormat): self
    {
        $this->shippingAddressFormat = $shippingAddressFormat;

        return $this;
    }

    public function getShippingCustomField(): ?string
    {
        return $this->shippingCustomField;
    }

    public function setShippingCustomField(string $shippingCustomField): self
    {
        $this->shippingCustomField = $shippingCustomField;

        return $this;
    }

    public function getShippingMethod(): ?string
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(string $shippingMethod): self
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    public function getShippingCode(): ?string
    {
        return $this->shippingCode;
    }

    public function setShippingCode(string $shippingCode): self
    {
        $this->shippingCode = $shippingCode;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getOrderStatusId(): ?int
    {
        return $this->orderStatusId;
    }

    public function setOrderStatusId(int $orderStatusId): self
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    public function getAffiliateId(): ?int
    {
        return $this->affiliateId;
    }

    public function setAffiliateId(int $affiliateId): self
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    public function getCommission()
    {
        return $this->commission;
    }

    public function setCommission($commission): self
    {
        $this->commission = $commission;

        return $this;
    }

    public function getMarketingId(): ?int
    {
        return $this->marketingId;
    }

    public function setMarketingId(int $marketingId): self
    {
        $this->marketingId = $marketingId;

        return $this;
    }

    public function getTracking(): ?string
    {
        return $this->tracking;
    }

    public function setTracking(string $tracking): self
    {
        $this->tracking = $tracking;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }

    public function setCurrencyId(int $currencyId): self
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCurrencyValue()
    {
        return $this->currencyValue;
    }

    public function setCurrencyValue($currencyValue): self
    {
        $this->currencyValue = $currencyValue;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getForwardedIp(): ?string
    {
        return $this->forwardedIp;
    }

    public function setForwardedIp(string $forwardedIp): self
    {
        $this->forwardedIp = $forwardedIp;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getAcceptLanguage(): ?string
    {
        return $this->acceptLanguage;
    }

    public function setAcceptLanguage(string $acceptLanguage): self
    {
        $this->acceptLanguage = $acceptLanguage;

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
