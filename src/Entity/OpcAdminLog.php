<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpcAdminLog
 *
 * @ORM\Table(name="opc_admin_log")
 * @ORM\Entity
 */
class OpcAdminLog
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="string", length=255, nullable=false)
     */
    private $userLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=false)
     */
    private $action;

    /**
     * @var int
     *
     * @ORM\Column(name="old_value", type="integer", nullable=false)
     */
    private $oldValue;

    /**
     * @var int
     *
     * @ORM\Column(name="new_value", type="integer", nullable=false)
     */
    private $newValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_action", type="datetime", nullable=false)
     */
    private $dateAction;

    /**
     * @var int
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     */
    private $productId;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }

    public function setUserLogin(string $userLogin): self
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getOldValue(): ?int
    {
        return $this->oldValue;
    }

    public function setOldValue(int $oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function getNewValue(): ?int
    {
        return $this->newValue;
    }

    public function setNewValue(int $newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function getDateAction(): ?\DateTimeInterface
    {
        return $this->dateAction;
    }

    public function setDateAction(\DateTimeInterface $dateAction): self
    {
        $this->dateAction = $dateAction;

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


}
