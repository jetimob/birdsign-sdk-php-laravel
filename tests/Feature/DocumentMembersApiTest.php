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
    protected static ?int $groupId = 82;
    protected static ?int $memberId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::documentMembers();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$memberId)) {
            return;
        }

        BirdSign::documentMembers()->delete(self::$memberId);
    }

    public function testCreate(): void
    {
        $response = $this->api->create(DocumentMemberDTO::new(Role::APPROVE, self::$groupId, 'lucasbeckps@gmail.com'));
        $this->assertSame(201, $response->getStatusCode());
        self::$memberId = $response->getDocumentMember()->getId();
    }

    public function testFind(): void
    {
        $response = $this->api->find(self::$memberId);
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testUpdate(): void
    {
        $newRole = Role::OTHER;
        $response = $this->api->update(self::$memberId, (new DocumentMemberDTO())->setRole($newRole));
        $docMember = $response->getDocumentMember();
        $this->assertSame($newRole, $docMember->getRole());
    }

    public function testDelete(): void
    {
        $response = $this->api->delete(self::$memberId);
        $this->assertSame(204, $response->getStatusCode());
        self::$memberId = null;
    }
}
