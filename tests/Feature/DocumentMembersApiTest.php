<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Jetimob\BirdSign\Api\DocumentMembers\DocumentMembersApi;
use Jetimob\BirdSign\Api\DocumentMembers\DTO\DocumentMemberDTO;
use Jetimob\BirdSign\Entity\Role;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class DocumentMembersApiTest extends AbstractTestCase
{
    protected DocumentMembersApi $api;
    protected static ?int $docId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::documentMembers();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$docId)) {
            return;
        }

        BirdSign::documentMembers()->delete(self::$docId);
    }

    public function testCreate(): void
    {
        $response = $this->api->create(DocumentMemberDTO::new(Role::APPROVE, 999, ''));
        $this->assertSame(200, $response->getStatusCode);
        self::$docId = $response->getDocumentMember()->getId();
    }

    public function testFind(): void
    {
        $response = $this->api->find(80);
        dump($response->getDocumentMember());
        $this->assertSame(self::$docId, $response->getStatusCode());
    }

    public function testUpdate(): void
    {
        $newRole = Role::OTHER;
        $response = $this->api->update(self::$docId, (new DocumentMemberDTO())->setRole($newRole));
        $docMember = $response->getDocumentMember();
        $this->assertSame($newRole, $docMember->getRole());
    }

    public function testDelete(): void
    {
        $response = $this->api->delete(self::$docId);
        $this->assertSame(204, $response->getStatusCode());
        self::$docId = null;
    }
}
