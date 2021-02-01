<?php

namespace Facades\Statamic\Updater;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Updater\UpdatesOverview
 */
class UpdatesOverview extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Updater\UpdatesOverview';
    }
}
