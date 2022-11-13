<?php

namespace App\Console\Commands;

use App\Modules\Math\Services\BaseService;
use Illuminate\Console\Command;

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

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $service = new BaseService();
//        $operator = $this->choice('Choice operator?',['-', '+', '*', '\\']);

        $operator = '+';

        $service->set('operator', $operator);

        echo $service->generate('a').PHP_EOL;
//        $a =$this->arguments();
//        return $a;
    }
}
