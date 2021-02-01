<?php

namespace Facades\Statamic\Fields;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Statamic\Fields\FieldtypeRepository
 */
class FieldtypeRepository extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Statamic\Fields\FieldtypeRepository';
    }
}
