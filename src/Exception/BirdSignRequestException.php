<?php

namespace Jetimob\BirdSign\Exception;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class BirdSignRequestException extends RequestException implements BirdSignException, HydratableContract
{
    use Serializable;
}
