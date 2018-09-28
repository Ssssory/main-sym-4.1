<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcMwsReturn
 *
 * @ORM\Table(name="oc_mws_return")
 * @ORM\Entity
 */
class OcMwsReturn
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
     * @ORM\Column(name="invoice_id", type="text", length=65535, nullable=false)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=10, nullable=false)
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="techMessage", type="text", length=65535, nullable=false)
     */
    private $techmessage;

    /**
     * @var int
     *
     * @ORM\Column(name="error", type="integer", nullable=false)
     */
    private $error;

    /**
     * @var string
     *
     * @ORM\Column(name="cause", type="text", length=65535, nullable=false)
     */
    private $cause;

    /**
     * @var string
     *
     * @ORM\Column(name="clientOrderId", type="text", length=65535, nullable=false)
     */
    private $clientorderid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;

    /**
     * @var string
     *
     * @ORM\Column(name="request", type="text", length=65535, nullable=false)
     */
    private $request;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvoiceId(): ?string
    {
        return $this->invoiceId;
    }

    public function setInvoiceId(string $invoiceId): self
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTechmessage(): ?string
    {
        return $this->techmessage;
    }

    public function setTechmessage(string $techmessage): self
    {
        $this->techmessage = $techmessage;

        return $this;
    }

    public function getError(): ?int
    {
        return $this->error;
    }

    public function setError(int $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function getCause(): ?string
    {
        return $this->cause;
    }

    public function setCause(string $cause): self
    {
        $this->cause = $cause;

        return $this;
    }

    public function getClientorderid(): ?string
    {
        return $this->clientorderid;
    }

    public function setClientorderid(string $clientorderid): self
    {
        $this->clientorderid = $clientorderid;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(string $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getRequest(): ?string
    {
        return $this->request;
    }

    public function setRequest(string $request): self
    {
        $this->request = $request;

        return $this;
    }


}
