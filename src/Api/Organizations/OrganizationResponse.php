<?php

namespace Jetimob\BirdSign\Api\Organizations;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Organization;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Organizations
 */
class OrganizationResponse extends BirdSignResponse
{
    protected Organization $data;

    /**
     * @return Organization
     */
    public function getOrganization(): Organization
    {
        return $this->data;
    }
}
