<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class Webhook
{
    use Serializable;

    protected int $id;
    protected string $event;
    protected string $url;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
