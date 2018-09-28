<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcUserGroup
 *
 * @ORM\Table(name="oc_user_group")
 * @ORM\Entity
 */
class OcUserGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text", length=65535, nullable=false)
     */
    private $permission;

    public function getUserGroupId(): ?int
    {
        return $this->userGroupId;
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

    public function getPermission(): ?string
    {
        return $this->permission;
    }

    public function setPermission(string $permission): self
    {
        $this->permission = $permission;

        return $this;
    }


}
