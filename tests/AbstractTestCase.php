<?php

namespace Jetimob\BirdSign\Tests;

use Jetimob\BirdSign\BirdSignServiceProvider;
use Jetimob\BirdSign\Facades\BirdSign;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        BirdSign::getHttpInstance()->overwriteConfig(
            'oauth_access_token_repository',
            \Jetimob\Http\Authorization\OAuth\Storage\FileCacheRepository::class
        );
//        BirdSign::getHttpInstance()->oAuth()->handleAuthorizationCodeExchange('def50200f759af907440d72b577b1b829b34be1a172b6df82d6a1020e5db5cf4ba7b115edaf0e03609e82f864ea954810cf5151c12e139526dbaa2e2f2d776437367cc2147c8e36d4a8c071b6305e28ff02d18542a6c7a77d7f5ae9d8f56b226f16fc9c4144d740a2da2fb9aec69f56af813787b5eeb770cb445253110b99d4a44c1c2587c7d32bfef36072f2472532f4f6a27946d25b23522d1b4b36617e3b8e9e977c004bdc9e7559e2e7e97731b7dd7f03aa9501f83fadae9628a6550c82593c3a92d4a7575cdb8a712016ad58b9c6d26f950cf85c2a94a400c9507a45d4bb5b0bc29e0feebc9d758b3ac21bcab1cc036ec6712e6b78a0426eb1c7c61451f61b3a192db2798ee2056d764c9b19c34a82adebdbe9b1664e72075eea5acde38d7d1db96447a856c76d4c7ba060ec3f903208e4074a39e01150ff23dc29bd70720b38001f4599bc9e9c5f0f6d266dec3e00f9efe3defc55a43ed8b0251f039b6eaec7aff37dc1f6ca2da15dcd6');
    }

    /** @inheritDoc */
    protected function getPackageProviders($app)
    {
        return [BirdSignServiceProvider::class];
    }
}
