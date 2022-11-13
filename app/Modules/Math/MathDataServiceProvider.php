<?php

namespace App\Modules\Math;

use App\Modules\Math\Contracts\ContentCabinetData;
use App\Modules\Math\Services\Math;
use Illuminate\Support\ServiceProvider;

class MathDataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            ContentCabinetData::class,
            Math::class
        );
    }
}
