<?php

namespace Rognales\Air;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rognales\Air\Skeleton\SkeletonClass
 */
class AirFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'air';
    }
}
