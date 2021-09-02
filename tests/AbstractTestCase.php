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

        // exemplo de como trocar um código de autorização por um access token
        // BirdSign::getHttpInstance()->oAuth()->handleAuthorizationCodeExchange('');
    }

    /** @inheritDoc */
    protected function getPackageProviders($app)
    {
        return [BirdSignServiceProvider::class];
    }
}
