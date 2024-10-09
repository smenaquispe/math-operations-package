<?php

namespace Smenaquispe\Mathly;

use Illuminate\Support\ServiceProvider;
use Smenaquispe\Mathly\Operations\SubstractionOperation;
use Smenaquispe\Mathly\Operations\SumOperation;

class MathOperationServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('sum_operation', function () {
            return new SumOperation();
        });

        $this->app->bind('substraction_operation', function () {
            return new SubstractionOperation();
        });
    }
}
