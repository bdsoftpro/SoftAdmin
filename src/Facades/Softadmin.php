<?php

namespace SBD\Softadmin\Facades;

use Illuminate\Support\Facades\Facade;

class Softadmin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'softadmin';
    }
}
