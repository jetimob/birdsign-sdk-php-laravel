<?php

namespace Jetimob\BirdSign\Api\DocumentGroups;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\DocumentGroup;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/get_documentGroups
 */
class DocumentGroupListResponse extends BirdSignResponse
{
    /** @var DocumentGroup[] */
    protected array $data;

    public function dataItemType(): string
    {
        return DocumentGroup::class;
    }

    /**
     * @return DocumentGroup[]
     */
    public function getDocumentGroups(): array
    {
        return $this->data;
    }
}
