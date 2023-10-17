<?php

namespace App\Modules\Math;

use App\Contracts\Math\Math;
use App\Services\Math\MathService;
use Illuminate\Support\ServiceProvider;

class MathDataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            Math::class,
            MathService::class
        );
    }
}
