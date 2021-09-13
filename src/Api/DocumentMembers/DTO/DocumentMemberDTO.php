<?php

namespace Jetimob\BirdSign\Api\DocumentMembers\DTO;

use Jetimob\Http\Traits\Serializable;

class DocumentMemberDTO
{
    use Serializable;

    protected ?int $role = null;
    protected ?int $document_group_id = null;
    protected ?string $email = null;
    protected ?string $cpf = null;
    protected ?string $name = null;
    protected ?string $birthdate = null;
    protected ?string $role_title = null;

    /**
     * @return int|null
     */
    public function getRole(): ?int
    {
        return $this->role;
    }

    /**
     * @param int|null $role
     *
     * @return DocumentMemberDTO
     */
    public function setRole(?int $role): DocumentMemberDTO
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDocumentGroupId(): ?int
    {
        return $this->document_group_id;
    }

    /**
     * @param int|null $document_group_id
     *
     * @return DocumentMemberDTO
     */
    public function setDocumentGroupId(?int $document_group_id): DocumentMemberDTO
    {
        $this->document_group_id = $document_group_id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return DocumentMemberDTO
     */
    public function setEmail(?string $email): DocumentMemberDTO
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @param string|null $cpf
     *
     * @return DocumentMemberDTO
     */
    public function setCpf(?string $cpf): DocumentMemberDTO
    {
        $this->cpf = $cpf;
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
     * @param string|null $name
     *
     * @return DocumentMemberDTO
     */
    public function setName(?string $name): DocumentMemberDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    /**
     * @param string|null $birthdate Y-m-d
     *
     * @return DocumentMemberDTO
     */
    public function setBirthdate(?string $birthdate): DocumentMemberDTO
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoleTitle(): ?string
    {
        return $this->role_title;
    }

    /**
     * @param string|null $role_title Y-m-d
     *
     * @return DocumentMemberDTO
     */
    public function setRoleTitle(?string $role_title): DocumentMemberDTO
    {
        $this->role_title = $role_title;
        return $this;
    }

    public static function new(int $role, int $documentGroupId, string $email): self
    {
        return (new static())
            ->setRole($role)
            ->setDocumentGroupId($documentGroupId)
            ->setEmail($email);
    }
}
