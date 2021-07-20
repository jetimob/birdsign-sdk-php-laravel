<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Jetimob\BirdSign\Api\Plans\PlansApi;
use Jetimob\BirdSign\Entity\Plan;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class PlansApiTest extends AbstractTestCase
{
    protected PlansApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::plans();
    }

    public function testList(): void
    {
        $response = $this->api->list();
        $plans = $response->getPlans();

        $this->assertNotEmpty($plans);

        foreach ($plans as $plan) {
            $this->assertInstanceOf(Plan::class, $plan);
        }
    }
}
