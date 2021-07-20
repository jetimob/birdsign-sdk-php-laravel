<?php

namespace Jetimob\BirdSign\Api\Themes\DTO;

use Jetimob\Http\Traits\Serializable;

class ThemeDTO
{
    use Serializable;

    protected ?string $name = null;
    protected ?string $color = null;

    protected ?int $id = null;
    protected ?int $organization_id = null;
    protected ?string $left_image = null;
    protected ?string $right_image = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return ThemeDTO
     */
    public function setId(?int $id): ThemeDTO
    {
        $this->id = $id;
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
     * @return ThemeDTO
     */
    public function setOrganizationId(?int $organization_id): ThemeDTO
    {
        $this->organization_id = $organization_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return ThemeDTO
     */
    public function setName(string $name): ThemeDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLeftImage(): ?string
    {
        return $this->left_image;
    }

    /**
     * @param string|null $left_image
     *
     * @return ThemeDTO
     */
    public function setLeftImage(?string $left_image): ThemeDTO
    {
        $this->left_image = $left_image;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRightImage(): ?string
    {
        return $this->right_image;
    }

    /**
     * @param string|null $right_image
     *
     * @return ThemeDTO
     */
    public function setRightImage(?string $right_image): ThemeDTO
    {
        $this->right_image = $right_image;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return ThemeDTO
     */
    public function setColor(string $color): ThemeDTO
    {
        $this->color = $color;
        return $this;
    }

    public static function new(string $name, string $color): self
    {
        return (new static())
            ->setName($name)
            ->setColor($color);
    }
}
