<?php

namespace Facades\Statamic\Marketplace;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Marketplace\Marketplace
 */
class Marketplace extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Marketplace\Marketplace';
    }
}
