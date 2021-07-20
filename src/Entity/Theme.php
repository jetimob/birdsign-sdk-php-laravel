<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class Theme
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected int $user_id;
    protected string $name;
    protected string $color;

    protected ?int $organization_id = null;
    protected ?string $left_image = null;
    protected ?string $right_image = null;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
    }

    /**
     * @return string|null
     */
    public function getLeftImage(): ?string
    {
        return $this->left_image;
    }

    /**
     * @return string|null
     */
    public function getRightImage(): ?string
    {
        return $this->right_image;
    }
}
