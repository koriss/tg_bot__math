<?php


namespace App\Modules\Math\Contracts;


interface Tg
{
    public function get(): array;

    public function check(int $answer): bool;
}
