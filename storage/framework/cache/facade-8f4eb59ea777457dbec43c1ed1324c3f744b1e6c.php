<?php

namespace Facades\GuzzleHttp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GuzzleHttp\Client
 */
class Client extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'GuzzleHttp\Client';
    }
}
