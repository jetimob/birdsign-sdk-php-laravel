<?php

namespace Jetimob\BirdSign\Api\DocumentGroups;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;
use Jetimob\BirdSign\Api\DocumentGroups\DTO\DocumentGroupDTO;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups
 */
class DocumentGroupsApi extends AbstractApi
{
    /**
     * @return DocumentGroupListResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/get_documentGroups
     */
    public function list(): DocumentGroupListResponse
    {
        return $this->mappedGet('documentGroups', DocumentGroupListResponse::class);
    }

    /**
     * @param DocumentGroupDTO $document
     *
     * @return DocumentGroupResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/post_documentGroups
     */
    public function create(DocumentGroupDTO $document): DocumentGroupResponse
    {
        return $this->mappedPost('documentGroups', DocumentGroupResponse::class, [
            RequestOptions::JSON => $document->toArray(),
        ]);
    }

    /**
     * @param int $documentGroupId
     *
     * @return Response
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/delete_documentGroups__DocumentGroupId_
     */
    public function delete(int $documentGroupId): Response
    {
        return $this->request('delete', 'documentGroups/' . $documentGroupId);
    }

    /**
     * @param int $documentGroupId
     *
     * @return DocumentGroupResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/get_documentGroups__DocumentGroupId_
     */
    public function find(int $documentGroupId): DocumentGroupResponse
    {
        return $this->mappedGet('documentGroups/' . $documentGroupId, DocumentGroupResponse::class);
    }

    /**
     * @param int              $documentGroupId
     * @param DocumentGroupDTO $document
     *
     * @return DocumentGroupResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/put_documentGroups__DocumentGroupId_
     */
    public function update(int $documentGroupId, DocumentGroupDTO $document): DocumentGroupResponse
    {
        return $this->mappedPut('documentGroups/' . $documentGroupId, DocumentGroupResponse::class, [
            RequestOptions::JSON => $document->toArray(),
        ]);
    }

    /**
     * @param int $documentGroupId
     *
     * @return DocumentGroupResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/DocumentGroups/post_documentGroups__DocumentGroupId__sign
     */
    public function sign(int $documentGroupId): DocumentGroupResponse
    {
        return $this->mappedPost("documentGroups/$documentGroupId/sign", DocumentGroupResponse::class);
    }
}
