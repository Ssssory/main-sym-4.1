<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcPokupkiOrders
 *
 * @ORM\Table(name="oc_pokupki_orders")
 * @ORM\Entity
 */
class OcPokupkiOrders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_order", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="id_market_order", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMarketOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=100, nullable=false)
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="ptype", type="string", length=100, nullable=false)
     */
    private $ptype;

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=100, nullable=false)
     */
    private $home;

    /**
     * @var string
     *
     * @ORM\Column(name="pmethod", type="string", length=100, nullable=false)
     */
    private $pmethod;

    /**
     * @var string
     *
     * @ORM\Column(name="outlet", type="string", length=100, nullable=false)
     */
    private $outlet;

    public function getIdOrder(): ?int
    {
        return $this->idOrder;
    }

    public function getIdMarketOrder(): ?string
    {
        return $this->idMarketOrder;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getPtype(): ?string
    {
        return $this->ptype;
    }

    public function setPtype(string $ptype): self
    {
        $this->ptype = $ptype;

        return $this;
    }

    public function getHome(): ?string
    {
        return $this->home;
    }

    public function setHome(string $home): self
    {
        $this->home = $home;

        return $this;
    }

    public function getPmethod(): ?string
    {
        return $this->pmethod;
    }

    public function setPmethod(string $pmethod): self
    {
        $this->pmethod = $pmethod;

        return $this;
    }

    public function getOutlet(): ?string
    {
        return $this->outlet;
    }

    public function setOutlet(string $outlet): self
    {
        $this->outlet = $outlet;

        return $this;
    }


}
