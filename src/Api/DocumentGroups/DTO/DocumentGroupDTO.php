<?php

namespace Jetimob\BirdSign\Api\DocumentGroups\DTO;

use Jetimob\Http\Traits\Serializable;

class DocumentGroupDTO
{
    use Serializable;

    protected ?string $title = null;
    protected ?bool $add_initials = null;
    protected ?bool $is_phone_required = null;
    protected ?bool $is_id_photo_required = null;

    protected ?int $theme_id = null;
    protected ?int $organization_id = null;

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
     * @return DocumentGroupDTO
     */
    public function setTitle(?string $title): DocumentGroupDTO
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAddInitials(): ?bool
    {
        return $this->add_initials;
    }

    /**
     * @param bool|null $add_initials
     *
     * @return DocumentGroupDTO
     */
    public function setAddInitials(?bool $add_initials): DocumentGroupDTO
    {
        $this->add_initials = $add_initials;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsPhoneRequired(): ?bool
    {
        return $this->is_phone_required;
    }

    /**
     * @param bool|null $is_phone_required
     *
     * @return DocumentGroupDTO
     */
    public function setIsPhoneRequired(?bool $is_phone_required): DocumentGroupDTO
    {
        $this->is_phone_required = $is_phone_required;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsIdPhotoRequired(): ?bool
    {
        return $this->is_id_photo_required;
    }

    /**
     * @param bool|null $is_id_photo_required
     *
     * @return DocumentGroupDTO
     */
    public function setIsIdPhotoRequired(?bool $is_id_photo_required): DocumentGroupDTO
    {
        $this->is_id_photo_required = $is_id_photo_required;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getThemeId(): ?int
    {
        return $this->theme_id;
    }

    /**
     * @param int|null $theme_id
     *
     * @return DocumentGroupDTO
     */
    public function setThemeId(?int $theme_id): DocumentGroupDTO
    {
        $this->theme_id = $theme_id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
    }

    /**
     * @param int|null $organization_id
     *
     * @return DocumentGroupDTO
     */
    public function setOrganizationId(?int $organization_id): DocumentGroupDTO
    {
        $this->organization_id = $organization_id;
        return $this;
    }

    public static function new(
        string $title,
        bool $addInitials,
        bool $isPhoneRequired,
        bool $isIdPhotoRequired
    ): self
    {
        return (new static())
            ->setTitle($title)
            ->setAddInitials($addInitials)
            ->setIsPhoneRequired($isPhoneRequired)
            ->setIsIdPhotoRequired($isIdPhotoRequired);
    }
}
