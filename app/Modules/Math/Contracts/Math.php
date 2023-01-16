<?php


namespace App\Modules\Math\Contracts;


interface Math
{
    public function get(): string;

    public function check(int $answer): bool;
}
