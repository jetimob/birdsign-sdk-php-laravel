<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class DocumentLog
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected int $user_id;
    protected int $document_group_id;
    protected int $document_id;
    protected int $document_member_id;
    protected int $event_type;
    protected string $ip;
    protected string $location;
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
    public function getOrganizationId(): int
    {
        return $this->organization_id;
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
     * @return int
     */
    public function getDocumentId(): int
    {
        return $this->document_id;
    }

    /**
     * @return int
     */
    public function getDocumentMemberId(): int
    {
        return $this->document_member_id;
    }

    /**
     * @return int
     */
    public function getEventType(): int
    {
        return $this->event_type;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    public function getEventText(): string
    {
        switch ($this->event_type) {
            case 1:
                return 'document group created';
            case 2:
                return 'viewed by a member';
            case 3:
                return 'signed by a member';
        }

        return 'unknown';
    }
}
