<?php

namespace Jetimob\BirdSign\Api\Plans;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Plan;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Plans/get_plans
 */
class PlanListResponse extends BirdSignResponse
{
    /** @var Plan[] */
    protected array $data;

    public function dataItemType(): string
    {
        return Plan::class;
    }

    /**
     * @return Plan[]
     */
    public function getPlans(): array
    {
        return $this->data;
    }
}
