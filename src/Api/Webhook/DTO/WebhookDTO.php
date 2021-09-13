<?php

namespace Jetimob\BirdSign\Api\Webhook\DTO;

use Jetimob\Http\Traits\Serializable;

class WebhookDTO
{
    use Serializable;

    protected string $event;
    protected string $url;

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @param string $event
     *
     * @return WebhookDTO
     */
    public function setEvent(string $event): WebhookDTO
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return WebhookDTO
     */
    public function setUrl(string $url): WebhookDTO
    {
        $this->url = $url;
        return $this;
    }

    public static function new(string $event, string $url): self
    {
        return (new static())
            ->setEvent($event)
           ->setUrl($url);
    }
}
