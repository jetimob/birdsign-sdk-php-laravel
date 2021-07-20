<?php

namespace Jetimob\BirdSign\Api;

use Jetimob\BirdSign\BirdSign;
use Jetimob\BirdSign\Exception\BirdSignRequestException;
use Jetimob\Http\Request;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    protected ?string $exceptionClass = BirdSignRequestException::class;

    public function __construct(BirdSign $birdSign)
    {
        parent::__construct($birdSign);
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return new AuthorizedRequest($method, $path, $headers, $body);
    }
}
