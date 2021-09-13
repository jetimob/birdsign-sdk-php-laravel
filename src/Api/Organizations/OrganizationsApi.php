<?php

namespace Jetimob\BirdSign\Api\Organizations;

use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Organizations
 */
class OrganizationsApi extends AbstractApi
{
    /**
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Organizations/get_organizations
     * @return OrganizationListResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function list(): OrganizationListResponse
    {
        return $this->mappedGet('organizations', OrganizationListResponse::class);
    }

    public function create(string $name, int $leaderId, ?int $parentOrgId = null): OrganizationResponse
    {
        $data = [
            'name' => $name,
            'leader_id' => $leaderId,
        ];

        if (!is_null($parentOrgId)) {
            $data['parent_organization_id'] = $parentOrgId;
        }

        return $this->mappedPost('organizations', OrganizationResponse::class, [
            RequestOptions::JSON => $data,
        ]);
    }
}
