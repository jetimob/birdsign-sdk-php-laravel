<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class Plan
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected string $title;
    protected int $contracts_limit;
    protected bool $allow_sub_accounts;
    protected bool $is_enabled;
    protected float $price;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getContractsLimit(): int
    {
        return $this->contracts_limit;
    }

    /**
     * @return bool
     */
    public function isAllowSubAccounts(): bool
    {
        return $this->allow_sub_accounts;
    }

    /**
     * @return bool
     */
    public function isIsEnabled(): bool
    {
        return $this->is_enabled;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
