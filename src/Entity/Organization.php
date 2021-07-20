<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class Organization
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected ?int $parent_organization_id = null;
    protected int $leader_id;
    protected string $name;

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
    public function getParentOrganizationId(): int
    {
        return $this->parent_organization_id;
    }

    /**
     * @return int
     */
    public function getLeaderId(): int
    {
        return $this->leader_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
