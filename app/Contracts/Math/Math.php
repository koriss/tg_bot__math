<?php


namespace App\Contracts\Math;


interface Math
{
    public function get(): array;

    public function check(int $answer): bool;
}
