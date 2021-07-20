<?php

namespace Jetimob\BirdSign\Entity;

trait Timestamps
{
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updated_at;
    }
}
