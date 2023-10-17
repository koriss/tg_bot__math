<?php

namespace App\Console\Commands\Telegram;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class GetMe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:get-me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Telegram::getMe();
        dump($response);
    }
}
