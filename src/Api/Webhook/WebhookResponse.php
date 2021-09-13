<?php

namespace Jetimob\BirdSign\Api\Webhook;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Webhook;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhooks
 */
class WebhookResponse extends BirdSignResponse
{
    protected Webhook $data;

    /**
     * @return Webhook
     */
    public function getWebhook(): Webhook
    {
        return $this->data;
    }
}
