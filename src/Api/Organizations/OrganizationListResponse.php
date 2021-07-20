<?php

namespace Jetimob\BirdSign\Api\Organizations;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Organization;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Organizations/get_organizations
 */
class OrganizationListResponse extends BirdSignResponse
{
    public function containerItemType(): string
    {
        return Organization::class;
    }

    /**
     * @return Organization[]
     */
    public function getOrganizations(): array
    {
        return $this->getContainer();
    }
}
