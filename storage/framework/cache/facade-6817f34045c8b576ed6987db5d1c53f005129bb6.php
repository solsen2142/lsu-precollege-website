<?php

namespace Facades\Statamic\Stache;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Stache\Traverser
 */
class Traverser extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Stache\Traverser';
    }
}
