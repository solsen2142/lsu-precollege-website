<?php

namespace Facades\Statamic;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Version
 */
class Version extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Version';
    }
}
