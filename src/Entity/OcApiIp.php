<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcApiIp
 *
 * @ORM\Table(name="oc_api_ip")
 * @ORM\Entity
 */
class OcApiIp
{
    /**
     * @var int
     *
     * @ORM\Column(name="api_ip_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $apiIpId;

    /**
     * @var int
     *
     * @ORM\Column(name="api_id", type="integer", nullable=false)
     */
    private $apiId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip;

    public function getApiIpId(): ?int
    {
        return $this->apiIpId;
    }

    public function getApiId(): ?int
    {
        return $this->apiId;
    }

    public function setApiId(int $apiId): self
    {
        $this->apiId = $apiId;

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


}
