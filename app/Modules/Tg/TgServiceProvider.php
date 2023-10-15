<?php

namespace App\Modules\Tg;

use App\Modules\Math\Contracts\ContentCabinetData;
use App\Modules\Math\Services\MathService;
use Illuminate\Support\ServiceProvider;

class TgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            Tg::class,
            MathService::class
        );
    }
}
