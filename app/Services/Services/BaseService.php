<?php


namespace App\Modules\Tg\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\View;

class BaseService
{
    protected int $answer;
    protected string $operator;
    protected array $operators = [
        '-' => '',
        '+' => 'getPlus',
        '*',
        '/',
    ];


//    private function getType() : string
//    {
//        $string =
//        return $string;
//    }

    private function getPlus () : string
    {
//        $n1,
        return 'plus';
    }

    private function getMinus () : string
    {
        return 'minus';
    }

    public function generate(string $operator)
    {

        return $this->getPlus();
    }

    public function check()
    {

    }

    public function set(string $key, string $value) : void
    {
        $this->$key = $value;
    }
}
