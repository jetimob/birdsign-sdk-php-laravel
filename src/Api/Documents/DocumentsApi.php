<?php

namespace Jetimob\BirdSign\Api\Documents;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;
use Jetimob\BirdSign\Api\Documents\DTO\DocumentDTO;
use PhpParser\Comment\Doc;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Documents
 */
class DocumentsApi extends AbstractApi
{
    /**
     * @return DocumentListResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Documents/get_documents
     */
    public function list(): DocumentListResponse
    {
        return $this->mappedGet('documents', DocumentListResponse::class);
    }

    /**
     * @param DocumentDTO $document
     * @param string      $filePath
     *
     * @return DocumentResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Documents/post_documents
     */
    public function create(DocumentDTO $document, string $filePath): DocumentResponse
    {
        $file = fopen($filePath, 'rb');

        $data = [
            ['name' => 'file', 'contents' => $file],
        ];

        foreach ($document->toArray() as $key => $value) {
            $data[] = [
                'name' => $key,
                'contents' => $value,
            ];
        }

        $response = $this->mappedPost('documents', DocumentResponse::class, [
            RequestOptions::MULTIPART => $data,
        ]);

        fclose($file);

        return $response;
    }

    /**
     * @param int $documentId
     *
     * @return Response
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Documents/delete_documents__DocumentId_
     */
    public function delete(int $documentId): Response
    {
        return $this->request('delete', 'documents/' . $documentId);
    }

    /**
     * @param int $documentId
     *
     * @return DocumentResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Documents/get_documents__DocumentId_
     */
    public function find(int $documentId): DocumentResponse
    {
        return $this->mappedGet('documents/' . $documentId, DocumentResponse::class);
    }

    /**
     * @param int         $documentId
     * @param DocumentDTO $document
     *
     * @return DocumentResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Documents/put_documents__DocumentId_
     */
    public function update(int $documentId, DocumentDTO $document): DocumentResponse
    {
        return $this->mappedPut('documents/' . $documentId, DocumentResponse::class, [
            RequestOptions::JSON => $document->toArray(),
        ]);
    }
}
