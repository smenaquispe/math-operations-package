<?php

namespace Smenaquispe\Mathly\Facades;

use Illuminate\Support\Facades\Facade;

class SumOperation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sum_operation';
    }
}
