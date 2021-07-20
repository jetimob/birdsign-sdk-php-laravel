<?php

namespace Jetimob\BirdSign\Api\Users\DTO;

use Jetimob\BirdSign\Api\DTO\OrganizationDTO;
use Jetimob\Http\Traits\Serializable;

class UserDTO
{
    use Serializable;

    protected string $name;
    protected string $email;
    protected string $cpf;

    protected string $birthdate;
    protected string $password;
    protected ?OrganizationDTO $organizationDTO = null;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return UserDTO
     */
    public function setName(string $name): UserDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return UserDTO
     */
    public function setEmail(string $email): UserDTO
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     *
     * @return UserDTO
     */
    public function setCpf(string $cpf): UserDTO
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate Y-m-d
     *
     * @return UserDTO
     */
    public function setBirthdate(string $birthdate): UserDTO
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return UserDTO
     */
    public function setPassword(string $password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return OrganizationDTO
     */
    public function getOrganizationDTO(): OrganizationDTO
    {
        return $this->organizationDTO;
    }

    /**
     * @param OrganizationDTO|null $organizationDTO
     *
     * @return UserDTO
     */
    public function setOrganizationDTO(?OrganizationDTO $organizationDTO): UserDTO
    {
        $this->organizationDTO = $organizationDTO;
        return $this;
    }
}
