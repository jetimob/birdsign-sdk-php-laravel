<?php

namespace Jetimob\BirdSign\Entity;

use Jetimob\Http\Traits\Serializable;

class DocumentMember
{
    use Timestamps;
    use Serializable;

    protected int $id;
    protected string $uuid;
    protected int $document_group_id;
    protected int $user_id;
    protected string $email;
    protected int $email_status;
    protected int $role;
    protected bool $is_signed;

    protected ?string $name = null;
    protected ?string $cpf = null;
    protected ?string $role_title = null;
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
    public function getDocumentGroupId(): int
    {
        return $this->document_group_id;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getEmailStatus(): int
    {
        return $this->email_status;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * @return string|null
     */
    public function getRoleTitle(): ?string
    {
        return $this->role_title;
    }

    /**
     * @return bool
     */
    public function isIsSigned(): bool
    {
        return $this->is_signed;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @return int|null
     */
    public function getOrganizationId(): ?int
    {
        return $this->organization_id;
    }

    public function getRoleText(): string
    {
       return Role::toText($this->getRole());
    }

    public function getEmailStatusText(): string
    {
        switch ($this->email_status) {
            case 0:
                return 'waiting to send';
            case 1:
                return 'sent';
            case 2:
                return 'received';
            case 3:
                return 'read';
            case 4:
                return 'visited';
        }

        return 'unknown';
    }
}
