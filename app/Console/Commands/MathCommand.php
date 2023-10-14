<?php

namespace App\Console\Commands;

use App\Modules\Math\Services\BaseService;
use App\Modules\Math\Services\MathService;
use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class MathCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'math:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        echo PHP_EOL;
        echo PHP_EOL;

        dump($service->get());

        echo PHP_EOL;

        $params = [
            'chat_id' => env('TG_CHATID'),
            'text' => 'asd',
        ];

        $response = Telegram::bot('math')->sendMessage($params);
        dump($response);
        // dump($this->telegram->bot('math')->getMe());
    }

}
