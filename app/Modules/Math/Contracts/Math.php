<?php


namespace App\Modules\Math\Contracts;


interface Math
{
    public function get(): array;

    public function check(int $answer): bool;
}
