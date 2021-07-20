<?php

namespace Jetimob\BirdSign\Api\Documents\DTO;

use Jetimob\Http\Traits\Serializable;

class DocumentDTO
{
    use Serializable;

    protected ?int $user_id = null;
    protected ?int $document_group_id = null;
    protected ?string $title = null;
    protected ?string $file_url = null;
    protected ?string $original_file_url = null;
    protected ?int $order = null;

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * @param int|null $user_id
     *
     * @return DocumentDTO
     */
    public function setUserId(?int $user_id): DocumentDTO
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDocumentGroupId(): ?int
    {
        return $this->document_group_id;
    }

    /**
     * @param int|null $document_group_id
     *
     * @return DocumentDTO
     */
    public function setDocumentGroupId(?int $document_group_id): DocumentDTO
    {
        $this->document_group_id = $document_group_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return DocumentDTO
     */
    public function setTitle(?string $title): DocumentDTO
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileUrl(): ?string
    {
        return $this->file_url;
    }

    /**
     * @param string|null $file_url
     *
     * @return DocumentDTO
     */
    public function setFileUrl(?string $file_url): DocumentDTO
    {
        $this->file_url = $file_url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginalFileUrl(): ?string
    {
        return $this->original_file_url;
    }

    /**
     * @param string|null $original_file_url
     *
     * @return DocumentDTO
     */
    public function setOriginalFileUrl(?string $original_file_url): DocumentDTO
    {
        $this->original_file_url = $original_file_url;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }

    /**
     * @param int|null $order
     *
     * @return DocumentDTO
     */
    public function setOrder(?int $order): DocumentDTO
    {
        $this->order = $order;
        return $this;
    }

    public static function new(int $documentGroupId, string $title): self
    {
        return (new static())
            ->setDocumentGroupId($documentGroupId)
            ->setTitle($title);
    }
}
