<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcDownload
 *
 * @ORM\Table(name="oc_download")
 * @ORM\Entity
 */
class OcDownload
{
    /**
     * @var int
     *
     * @ORM\Column(name="download_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $downloadId;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=128, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=128, nullable=false)
     */
    private $mask;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    public function getDownloadId(): ?int
    {
        return $this->downloadId;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getMask(): ?string
    {
        return $this->mask;
    }

    public function setMask(string $mask): self
    {
        $this->mask = $mask;

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


}
