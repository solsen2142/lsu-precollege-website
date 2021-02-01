<?php

namespace Facades\Statamic\Console\Processes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Console\Processes\Composer
 */
class Composer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Console\Processes\Composer';
    }
}
