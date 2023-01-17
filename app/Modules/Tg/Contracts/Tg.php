<?php


namespace App\Modules\Tg\Contracts;


interface Tg
{
    public function get(): array;

    public function check(int $answer): bool;
}
