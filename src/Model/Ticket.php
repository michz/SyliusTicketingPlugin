<?php

declare(strict_types=1);

namespace mztx\SyliusTicketingPlugin\Model;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

class Ticket implements CodeAwareInterface, ResourceInterface
{
    /** @var int|null */
    private $id;

    /** @var string|null */
    private $code;

    /** @var string|null */
    private $articleCode;

    /** @var string|null */
    private $owner;

    /** @var \DateTime */
    private $created;

    /** @var \DateTime|null */
    private $used;

    /** @var string */
    private $state = 'valid';

    public function __construct()
    {
        $this->created = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getArticleCode(): ?string
    {
        return $this->articleCode;
    }

    public function setArticleCode(?string $articleCode): void
    {
        $this->articleCode = $articleCode;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): void
    {
        $this->owner = $owner;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }

    public function getUsed(): ?\DateTime
    {
        return $this->used;
    }

    public function setUsed(?\DateTime $used): void
    {
        $this->used = $used;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }
}
