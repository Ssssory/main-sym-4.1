<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcLiTranslate
 *
 * @ORM\Table(name="oc_li_translate", indexes={@ORM\Index(name="text_id", columns={"text_id"}), @ORM\Index(name="lang", columns={"lang"}), @ORM\Index(name="text", columns={"text"})})
 * @ORM\Entity
 */
class OcLiTranslate
{
    /**
     * @var int
     *
     * @ORM\Column(name="translate_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $translateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="text_id", type="integer", nullable=true)
     */
    private $textId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=3, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=2000, nullable=true)
     */
    private $text;

    public function getTranslateId(): ?int
    {
        return $this->translateId;
    }

    public function getTextId(): ?int
    {
        return $this->textId;
    }

    public function setTextId(?int $textId): self
    {
        $this->textId = $textId;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
