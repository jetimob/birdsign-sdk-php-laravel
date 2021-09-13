<?php

namespace Jetimob\BirdSign\Api\Documents;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Document;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Documents
 */
class DocumentResponse extends BirdSignResponse
{
    protected Document $data;

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->data;
    }
}
