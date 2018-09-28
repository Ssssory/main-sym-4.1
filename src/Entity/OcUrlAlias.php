<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OcUrlAlias
 *
 * @ORM\Table(name="oc_url_alias", indexes={@ORM\Index(name="query", columns={"query"}), @ORM\Index(name="keyword", columns={"keyword"})})
 * @ORM\Entity
 */
class OcUrlAlias
{
    /**
     * @var int
     *
     * @ORM\Column(name="url_alias_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $urlAliasId;

    /**
     * @var string
     *
     * @ORM\Column(name="query", type="string", length=255, nullable=false)
     */
    private $query;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255, nullable=false)
     */
    private $keyword;

    public function getUrlAliasId(): ?int
    {
        return $this->urlAliasId;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }


}
