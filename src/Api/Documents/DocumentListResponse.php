<?php

namespace Jetimob\BirdSign\Api\Documents;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Document;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Documents/get_documents
 */
class DocumentListResponse extends BirdSignResponse
{
    /** @var Document[] */
    protected array $data;

    public function dataItemType(): string
    {
        return Document::class;
    }

    /**
     * @return Document[]
     */
    public function getDocuments(): array
    {
        return $this->data;
    }
}
