<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class DocumentGroup
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected string $uuid;
    protected int $user_id;
    protected string $title;
    protected int $status;
    protected bool $add_initials;
    protected bool $is_phone_required;

    protected ?bool $is_id_photo_required;
    protected ?int $theme_id = null;
    protected ?int $organization_id = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
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
    public function getOrganizationId(): int
    {
        return $this->organization_id;
    }

    /**
     * @return int|null
     */
    public function getThemeId(): ?int
    {
        return $this->theme_id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function isAddInitials(): bool
    {
        return $this->add_initials;
    }

    /**
     * @return bool
     */
    public function isIsPhoneRequired(): bool
    {
        return $this->is_phone_required;
    }

    /**
     * @return bool|null
     */
    public function isIsIdPhotoRequired(): ?bool
    {
        return $this->is_id_photo_required;
    }

    public function getStatusText(): string
    {
        switch ($this->status) {
            case 1:
                return 'created';
            case 2:
                return 'waiting for signatures';
            case 3:
                return 'fully signed';
        }

        return 'unknown';
    }
}
