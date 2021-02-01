<?php

namespace Facades\Statamic\Imaging;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Imaging\GlideServer
 */
class GlideServer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Imaging\GlideServer';
    }
}
