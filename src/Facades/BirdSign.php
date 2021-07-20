<?php

namespace Jetimob\BirdSign\Facades;

use Illuminate\Support\Facades\Facade;

class BirdSign extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetimob.birdsign';
    }
}
