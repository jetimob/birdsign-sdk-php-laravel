<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class Document
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected int $user_id;
    protected int $document_group_id;
    protected string $title;
    protected string $file_url;
    protected string $original_file_url;
    protected int $order;

    protected ?int $organization_id = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getDocumentGroupId(): int
    {
        return $this->document_group_id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFileUrl(): string
    {
        return $this->file_url;
    }

    /**
     * @return string
     */
    public function getOriginalFileUrl(): string
    {
        return $this->original_file_url;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
    }
}
