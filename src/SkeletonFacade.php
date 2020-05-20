<?php

namespace Bnw\Skeleton;

use Illuminate\Support\Facades\Facade;

class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
