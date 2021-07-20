<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class User
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected string $name;
    protected string $email;
    protected string $cpf;
    protected string $birthdate;
    protected string $phone_number;
    protected bool $is_phone_verified;
    protected string $signature_type;
    protected string $signature_url;
    protected int $acl;

    protected ?string $avatar = null;
    protected ?string $password = null;
    protected ?int $organization_id = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @return bool
     */
    public function isIsPhoneVerified(): bool
    {
        return $this->is_phone_verified;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getSignatureType(): string
    {
        return $this->signature_type;
    }

    /**
     * @return string
     */
    public function getSignatureUrl(): string
    {
        return $this->signature_url;
    }

    /**
     * @return int
     */
    public function getAcl(): int
    {
        return $this->acl;
    }
}
