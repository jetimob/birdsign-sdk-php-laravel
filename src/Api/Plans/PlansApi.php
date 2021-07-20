<?php

namespace Jetimob\BirdSign\Api\Plans;

use Jetimob\BirdSign\Api\AbstractApi;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Plans
 */
class PlansApi extends AbstractApi
{
    /**
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Plans/get_plans
     * @return PlanListResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function list(): PlanListResponse
    {
        return $this->mappedGet('plans', PlanListResponse::class);
    }
}
