<?php

namespace App\Modules\Math;

use App\Modules\Math\Contracts\Math;
use App\Modules\Math\Services\MathService;
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
