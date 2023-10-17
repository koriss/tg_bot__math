<?php

namespace App\Console\Commands\Telegram;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class SetWebhook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:set-webhook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set telegram webhook from route api.telegram';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Telegram::setWebhook(['url' => route('api.telegram')]);
        dump($response);
        
        # Or if you are supplying a self-signed-certificate
        // $response = Telegram::setWebhook([
        //     'url' => 'https://example.com/<token>/webhook',
        //     'certificate' => '/path/to/public_key_certificate.pub'
        // ]);
    }
}
