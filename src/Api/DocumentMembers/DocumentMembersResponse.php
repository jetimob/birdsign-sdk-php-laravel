<?php

namespace Jetimob\BirdSign\Api\DocumentMembers;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\DocumentMember;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers
 */
class DocumentMembersResponse extends BirdSignResponse
{
    protected DocumentMember $data;

    /**
     * @return DocumentMember
     */
    public function getDocumentMember(): DocumentMember
    {
        return $this->data;
    }
}
