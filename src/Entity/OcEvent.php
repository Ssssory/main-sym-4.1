<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcEvent
 *
 * @ORM\Table(name="oc_event")
 * @ORM\Entity
 */
class OcEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=32, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="trigger", type="text", length=65535, nullable=false)
     */
    private $trigger;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="text", length=65535, nullable=false)
     */
    private $action;

    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getTrigger(): ?string
    {
        return $this->trigger;
    }

    public function setTrigger(string $trigger): self
    {
        $this->trigger = $trigger;

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


}
