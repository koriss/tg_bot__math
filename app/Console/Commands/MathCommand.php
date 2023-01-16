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

//        $operator = '+';

//        $service->set('operator', $operator);

//        echo $service->generate('a').PHP_EOL;

//        $a =$this->arguments();
//        return $a;
        echo PHP_EOL;        echo PHP_EOL;

        $input = array("-", "+");
        shuffle($input);
        dump($input[0]);
        shuffle($input);
        dump($input[0]);

        echo 3 - 1;

                echo PHP_EOL;

        $var_2 = null;
        $this->operator = '+';
        $this->var_2 = $var_2;
        if($this->var_2 === null) {
            if($this->operator === '-') {
                $this->var_2 = mt_rand($this->var_1,999);
            }
            $this->var_2 = mt_rand(10,999);
        }

        dump($this->var_2 );
    }
}
