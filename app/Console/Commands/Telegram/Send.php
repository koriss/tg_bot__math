<?php

namespace App\Console\Commands\Telegram;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class Send extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:send 
                            {--chat_id= : Enter your chat telegram chat id for send test message}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send math to default chat id or for custom, just write digits afte';

    protected $telegram;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
            
        $service = new \App\Services\Math\MathService();
        $chat_id = $this->option('chat_id') ?? env('TG_CHATID');
        $text = 'Нужно найти ответ и написать:'
                .PHP_EOL.$service->get()['math'].' = ?'
                .PHP_EOL.PHP_EOL.PHP_EOL.time().PHP_EOL
                ;
        $params = [
            'chat_id' => $chat_id,
            'text' => $text,
        ];

        echo PHP_EOL;
        // dump($response);
        echo PHP_EOL;

        dump($params);
    
        echo PHP_EOL;
        echo PHP_EOL;
        
        $response = Telegram::bot('math')->sendMessage($params);
        dump($response);

        
        // dump($this->telegram->bot('math')->getMe());

        return true;
    }

}