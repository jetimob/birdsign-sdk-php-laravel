<?php

namespace Jetimob\BirdSign\Api\Webhook;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;
use Jetimob\BirdSign\Api\Webhook\DTO\WebhookDTO;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook
 */
class WebhooksApi extends AbstractApi
{
    /**
     * @return WebhookListResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook/get_webhooks
     */
    public function list(): WebhookListResponse
    {
        return $this->mappedGet('webhooks', WebhookListResponse::class);
    }

    /**
     * @param WebhookDTO $webhook
     *
     * @return WebhookResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook/post_webhooks
     */
    public function create(WebhookDTO $webhook): WebhookResponse
    {
        return $this->mappedPost('webhooks', WebhookResponse::class, [
            RequestOptions::JSON => $webhook->toArray(),
        ]);
    }

    /**
     * @param int $webhookId
     *
     * @return Response
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook/delete_webhooks__WebhookId_
     */
    public function delete(int $webhookId): Response
    {
        return $this->request('delete', 'webhooks/' . $webhookId);
    }

    /**
     * @param int $webhookId
     *
     * @return WebhookResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook/get_webhooks__WebhookId_
     */
    public function find(int $webhookId): WebhookResponse
    {
        return $this->mappedGet('webhooks/' . $webhookId, WebhookResponse::class);
    }

    /**
     * @param int         $webhookId
     * @param WebhookDTO $webhook
     *
     * @return WebhookResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Webhook/put_webhooks__WebhookId_
     */
    public function update(int $webhookId, WebhookDTO $webhook): WebhookResponse
    {
        return $this->mappedPut('webhooks/' . $webhookId, WebhookResponse::class, [
            RequestOptions::JSON => $webhook->toArray(),
        ]);
    }
}
