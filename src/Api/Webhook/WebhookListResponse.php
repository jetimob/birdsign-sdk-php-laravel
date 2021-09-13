<?php

namespace Jetimob\BirdSign\Api\Webhook;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Webhook;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook/get_webhooks
 */
class WebhookListResponse extends BirdSignResponse
{
    /** @var Webhook[] */
    protected array $data;

    public function dataItemType(): string
    {
        return Webhook::class;
    }

    /**
     * @return Webhook[]
     */
    public function getWebhooks(): array
    {
        return $this->data;
    }
}
