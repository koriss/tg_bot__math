<?php

namespace App\Console\Commands;

use App\Modules\Math\Services\BaseService;
use App\Modules\Math\Services\MathService;
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
        $service = new MathService();

        echo PHP_EOL;
        echo PHP_EOL;

        dump($service->get());

        echo PHP_EOL;

    }
}
