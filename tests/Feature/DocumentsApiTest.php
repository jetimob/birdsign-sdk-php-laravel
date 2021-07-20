<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Jetimob\BirdSign\Api\Documents\DocumentsApi;
use Jetimob\BirdSign\Api\Documents\DTO\DocumentDTO;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class DocumentsApiTest extends AbstractTestCase
{
    protected DocumentsApi $api;
    protected static ?int $docId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::documents();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$docId)) {
            return;
        }

        BirdSign::documents()->delete(self::$docId);
    }

    public function testCreate(): void
    {
        $title = 'document title';
        $documentGroupId = 16;

        $response = $this->api->create(
            DocumentDTO::new($documentGroupId, $title), ''
        );
        $doc = $response->getDocument();

        $this->assertSame($documentGroupId, $doc->getDocumentGroupId());
        $this->assertSame($title, $doc->getTitle());
    }

    /**
     * @depends testCreate
     */
    public function testFind(): void
    {
        $response = $this->api->find(self::$docId);
        $doc = $response->getDocument();
        $this->assertNotEmpty($doc->getId());
    }

    /**
     * @depends testCreate
     */
    public function testList(): void
    {
        $response = $this->api->list();
        $docs = $response->getDocuments();

        if (empty($docs)) {
            return;
        }

        foreach ($docs as $doc) {
            dump($doc);
            $this->assertNotEmpty($doc->getTitle());
            $this->assertNotEmpty($doc->getFileUrl());
            $this->assertIsInt($doc->getDocumentGroupId());
        }
    }

    /**
     * @depends testCreate
     */
    public function testDelete(): void
    {
        $response = $this->api->delete(self::$docId);
        $this->assertSame(204, $response->getStatusCode());
        self::$docId = null;
    }

    /**
     * @depends testCreate
     */
    public function testUpdate(): void
    {
        $title = 'updated title';
        $response = $this->api->update(self::$docId, (new DocumentDTO())->setTitle($title));
        $doc = $response->getDocument();

        $this->assertSame($title, $doc->getTitle());
    }
}
