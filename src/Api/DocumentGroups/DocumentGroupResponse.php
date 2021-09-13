<?php

namespace Jetimob\BirdSign\Api\DocumentGroups;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\DocumentGroup;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentGroups
 */
class DocumentGroupResponse extends BirdSignResponse
{
    protected DocumentGroup $data;

    /**
     * @return DocumentGroup
     */
    public function getDocumentGroup(): DocumentGroup
    {
        return $this->data;
    }
}
