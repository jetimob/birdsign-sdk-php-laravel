<?php

namespace Jetimob\BirdSign\Api\Organizations\DTO;

use Jetimob\Http\Traits\Serializable;

class OrganizationDTO
{
    use Serializable;

    protected string $name;
    protected string $color;
    protected string $cnpj;
    protected string $logo;

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
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $name
     *
     * @return OrganizationDTO
     */
    public function setName(string $name): OrganizationDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $color
     *
     * @return OrganizationDTO
     */
    public function setColor(string $color): OrganizationDTO
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param string $cnpj
     *
     * @return OrganizationDTO
     */
    public function setCnpj(string $cnpj): OrganizationDTO
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @param string $logo
     *
     * @return OrganizationDTO
     */
    public function setLogo(string $logo): OrganizationDTO
    {
        $this->logo = $logo;
        return $this;
    }
}
