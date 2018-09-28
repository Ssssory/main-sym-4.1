<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcSeogenProfile
 *
 * @ORM\Table(name="oc_seogen_profile")
 * @ORM\Entity
 */
class OcSeogenProfile
{
    /**
     * @var int
     *
     * @ORM\Column(name="profile_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=false)
     */
    private $data;

    public function getProfileId(): ?int
    {
        return $this->profileId;
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

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
