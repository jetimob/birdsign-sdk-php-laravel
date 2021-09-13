<?php

namespace Jetimob\BirdSign\Api\DocumentMembers;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;
use Jetimob\BirdSign\Api\DocumentMembers\DTO\DocumentMemberDTO;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers
 */
class DocumentMembersApi extends AbstractApi
{
    /**
     * @return DocumentMembersListResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers/get_documentMembers
     */
    public function list(): DocumentMembersListResponse
    {
        return $this->mappedGet('documentMembers', DocumentMembersListResponse::class);
    }

    /**
     * @param DocumentMemberDTO $documentMember
     *
     * @return DocumentMembersResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers/post_documentMembers
     */
    public function create(DocumentMemberDTO $documentMember): DocumentMembersResponse
    {
        return $this->mappedPost('documentMembers', DocumentMembersResponse::class, [
            RequestOptions::JSON => $documentMember->toArray(),
        ]);
    }

    /**
     * @param int $documentId
     *
     * @return Response
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers/delete_documentMembers__DocumentMemberId_
     */
    public function delete(int $documentId): Response
    {
        return $this->request('delete', 'documentMembers/' . $documentId);
    }

    /**
     * @param int $documentId
     *
     * @return DocumentMembersResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers/get_documentMembers__DocumentMemberId_
     */
    public function find(int $documentId): DocumentMembersResponse
    {
        return $this->mappedGet('documentMembers/' . $documentId, DocumentMembersResponse::class);
    }

    /**
     * @param int               $documentMemberId
     * @param DocumentMemberDTO $documentMember
     *
     * @return DocumentMembersResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/DocumentMembers/put_documentMembers__DocumentMemberId_
     */
    public function update(int $documentMemberId, DocumentMemberDTO $documentMember): DocumentMembersResponse
    {
        return $this->mappedPut('documentMembers/' . $documentMemberId, DocumentMembersResponse::class, [
            RequestOptions::JSON => $documentMember->toArray(),
        ]);
    }
}
