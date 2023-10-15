<?php

namespace App\Console\Commands\Math;

use App\Modules\Math\Services\BaseService;
use App\Modules\Math\Services\MathService;
use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'math:send 
                            {--chat_id= : Enter your chat telegram chat id for send test message}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send math to default chat id or for custom, just write digits afte';

    protected $telegram;

    public function __construct(Telegram $telegram)
    {
        parent::__construct();
        // $this->telegram = new Telegram();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
            
        $service = new MathService();
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
    }

}
