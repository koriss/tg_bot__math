<?php

namespace App\Modules\Tg;

use App\Contracts\Chats\Chat;
use App\Services\Chats\MathService;
use Illuminate\Support\ServiceProvider;

class TgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            Chat::class,
            MathService::class
        );
    }
}
