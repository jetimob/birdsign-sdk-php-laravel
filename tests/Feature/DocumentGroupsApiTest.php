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
    protected static ?int $groupId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::documentGroups();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$groupId)) {
            return;
        }

        BirdSign::documentGroups()->delete(self::$groupId);
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

        self::$groupId = $doc->getId();
    }

    /**
     */
    public function testFind(): void
    {
        $response = $this->api->find(self::$groupId);
        $doc = $response->getDocumentGroup();
        $this->assertSame(self::$groupId, $doc->getId());
    }

    /**
     * @depends testCreate
     */
    public function testUpdate(): void
    {
        $title = 'updated_name';

        $response = $this->api->update(self::$groupId, (new DocumentGroupDTO())->setTitle($title));
        $doc = $response->getDocumentGroup();

        $this->assertSame($title, $doc->getTitle());
    }

    /**
     * @depends testCreate
     */
    public function testSign(): void
    {
        $response = $this->api->sign(self::$groupId);
        $this->assertSame(200, $response->getStatusCode());
    }

    /**
     * @depends testCreate
     */
    public function testDelete(): void
    {
        $response = $this->api->delete(self::$groupId);
        $this->assertSame(204, $response->getStatusCode());
        self::$groupId = null;
    }
}
