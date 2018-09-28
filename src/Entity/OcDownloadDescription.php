<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDownloadDescription
 *
 * @ORM\Table(name="oc_download_description")
 * @ORM\Entity
 */
class OcDownloadDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="download_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $downloadId;

    /**
     * @var int
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    public function getDownloadId(): ?int
    {
        return $this->downloadId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
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


}
