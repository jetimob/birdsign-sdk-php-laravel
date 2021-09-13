<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Jetimob\BirdSign\Api\Webhook\DTO\WebhookDTO;
use Jetimob\BirdSign\Api\Webhook\WebhooksApi;
use Jetimob\BirdSign\Entity\Event;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class WebhooksApiTest extends AbstractTestCase
{
    protected WebhooksApi $api;
    protected static ?int $webhookId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::webhooks();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$webhookId)) {
            return;
        }

        BirdSign::webhooks()->delete(self::$webhookId);
    }

    public function testCreate(): void
    {
        $response = $this->api->create(WebhookDTO::new(
            Event::DOCUMENT_GROUP_MEMBER_SIGNED,
            'https://birdsign.jetimob.com'
        ));
        $this->assertSame(201, $response->getStatusCode());
        self::$webhookId = $response->getWebhook()->getId();
    }

    public function testFind(): void
    {
        $response = $this->api->find(self::$webhookId);
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testUpdate(): void
    {
        $newUrl = 'https://teste2-birdsign.jetimob.com';
        $response = $this->api->update(self::$webhookId, (new WebhookDTO())->setUrl($newUrl));
        $webhook = $response->getWebhook();
        $this->assertSame($newUrl, $webhook->getUrl());
    }

    public function testDelete(): void
    {
        $response = $this->api->delete(self::$webhookId);
        $this->assertSame(204, $response->getStatusCode());
        self::$webhookId = null;
    }
}
