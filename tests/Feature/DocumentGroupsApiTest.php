<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Jetimob\BirdSign\Api\DocumentGroups\DocumentGroupsApi;
use Jetimob\BirdSign\Api\DocumentGroups\DTO\DocumentGroupDTO;
use Jetimob\BirdSign\Entity\DocumentGroup;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class DocumentGroupsApiTest extends AbstractTestCase
{
    protected DocumentGroupsApi $api;
    protected static ?int $documentId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::documentGroups();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$documentId)) {
            return;
        }

        BirdSign::documentGroups()->delete(self::$documentId);
    }

    public function testList(): void
    {
        // 83
        $response = $this->api->list();
        $docs = $response->getDocumentGroups();

        if (empty($docs)) {
            return;
        }

        foreach ($docs as $doc) {
            $this->assertInstanceOf(DocumentGroup::class, $doc);
            dump($doc);
        }
    }

    public function testCreate(): void
    {
        $title = 'document_title';

        $response = $this->api->create(
            DocumentGroupDTO::new($title, true, true, true)
        );

        $doc = $response->getDocumentGroup();
        $this->assertSame($title, $doc->getTitle());

        dump($doc);
        self::$documentId = $doc->getId();
    }

    /**
     */
    public function testFind(): void
    {
        $response = $this->api->find(82);
        $doc = $response->getDocumentGroup();
        $this->assertSame(82, $doc->getId());
        dump($doc);
    }

    /**
     * @depends testCreate
     */
    public function testDelete(): void
    {
        $response = $this->api->delete(self::$documentId);
        $this->assertSame(204, $response->getStatusCode());
    }

    /**
     * @depends testCreate
     */
    public function testUpdate(): void
    {
        $title = 'updated_name';

        $response = $this->api->update(self::$documentId, (new DocumentGroupDTO())->setTitle($title));
        $doc = $response->getDocumentGroup();

        $this->assertSame($title, $doc->getTitle());
    }

    public function testSign(): void
    {
        $response = $this->api->sign(82);
        $doc = $response->getDocumentGroup();

        dump($doc);
    }
}
