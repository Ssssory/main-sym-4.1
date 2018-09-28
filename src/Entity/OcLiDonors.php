<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiDonors
 *
 * @ORM\Table(name="oc_li_donors", indexes={@ORM\Index(name="state", columns={"state"}), @ORM\Index(name="host", columns={"host"}), @ORM\Index(name="dtype", columns={"dtype"})})
 * @ORM\Entity
 */
class OcLiDonors
{
    /**
     * @var int
     *
     * @ORM\Column(name="donor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $donorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="host", type="string", length=512, nullable=true)
     */
    private $host;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autorun", type="string", length=128, nullable=true)
     */
    private $autorun;

    /**
     * @var string|null
     *
     * @ORM\Column(name="missing", type="string", length=128, nullable=true)
     */
    private $missing;

    /**
     * @var int|null
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_tasks", type="integer", nullable=true)
     */
    private $activeTasks = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="done_tasks", type="integer", nullable=true)
     */
    private $doneTasks = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_entities", type="integer", nullable=true)
     */
    private $totalEntities = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_files", type="integer", nullable=true)
     */
    private $totalFiles = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_size", type="integer", nullable=true)
     */
    private $totalSize = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="check_url", type="string", length=2000, nullable=true)
     */
    private $checkUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="check_lurl", type="string", length=2000, nullable=true)
     */
    private $checkLurl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="started", type="integer", nullable=true)
     */
    private $started;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dtype", type="string", length=52, nullable=true)
     */
    private $dtype = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="advanced", type="integer", nullable=true)
     */
    private $advanced;

    /**
     * @var int|null
     *
     * @ORM\Column(name="auto_update", type="integer", nullable=true)
     */
    private $autoUpdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated", type="integer", nullable=true)
     */
    private $updated;

    public function getDonorId(): ?int
    {
        return $this->donorId;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function getAutorun(): ?string
    {
        return $this->autorun;
    }

    public function setAutorun(?string $autorun): self
    {
        $this->autorun = $autorun;

        return $this;
    }

    public function getMissing(): ?string
    {
        return $this->missing;
    }

    public function setMissing(?string $missing): self
    {
        $this->missing = $missing;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(?int $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getActiveTasks(): ?int
    {
        return $this->activeTasks;
    }

    public function setActiveTasks(?int $activeTasks): self
    {
        $this->activeTasks = $activeTasks;

        return $this;
    }

    public function getDoneTasks(): ?int
    {
        return $this->doneTasks;
    }

    public function setDoneTasks(?int $doneTasks): self
    {
        $this->doneTasks = $doneTasks;

        return $this;
    }

    public function getTotalEntities(): ?int
    {
        return $this->totalEntities;
    }

    public function setTotalEntities(?int $totalEntities): self
    {
        $this->totalEntities = $totalEntities;

        return $this;
    }

    public function getTotalFiles(): ?int
    {
        return $this->totalFiles;
    }

    public function setTotalFiles(?int $totalFiles): self
    {
        $this->totalFiles = $totalFiles;

        return $this;
    }

    public function getTotalSize(): ?int
    {
        return $this->totalSize;
    }

    public function setTotalSize(?int $totalSize): self
    {
        $this->totalSize = $totalSize;

        return $this;
    }

    public function getCheckUrl(): ?string
    {
        return $this->checkUrl;
    }

    public function setCheckUrl(?string $checkUrl): self
    {
        $this->checkUrl = $checkUrl;

        return $this;
    }

    public function getCheckLurl(): ?string
    {
        return $this->checkLurl;
    }

    public function setCheckLurl(?string $checkLurl): self
    {
        $this->checkLurl = $checkLurl;

        return $this;
    }

    public function getStarted(): ?int
    {
        return $this->started;
    }

    public function setStarted(?int $started): self
    {
        $this->started = $started;

        return $this;
    }

    public function getDtype(): ?string
    {
        return $this->dtype;
    }

    public function setDtype(?string $dtype): self
    {
        $this->dtype = $dtype;

        return $this;
    }

    public function getAdvanced(): ?int
    {
        return $this->advanced;
    }

    public function setAdvanced(?int $advanced): self
    {
        $this->advanced = $advanced;

        return $this;
    }

    public function getAutoUpdate(): ?int
    {
        return $this->autoUpdate;
    }

    public function setAutoUpdate(?int $autoUpdate): self
    {
        $this->autoUpdate = $autoUpdate;

        return $this;
    }

    public function getUpdated(): ?int
    {
        return $this->updated;
    }

    public function setUpdated(?int $updated): self
    {
        $this->updated = $updated;

        return $this;
    }


}
