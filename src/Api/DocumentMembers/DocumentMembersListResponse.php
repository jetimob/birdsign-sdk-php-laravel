<?php

namespace Jetimob\BirdSign\Api\DocumentMembers;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\DocumentMember;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentMembers
 */
class DocumentMembersListResponse extends BirdSignResponse
{
    /** @var DocumentMember[] */
    protected array $data;

    public function dataItemType(): string
    {
        return DocumentMember::class;
    }

    /**
     * @return DocumentMember[]
     */
    public function getDocumentMembers(): array
    {
        return $this->data;
    }
}
