<?php


namespace App\Contracts\Chat;


interface Chat
{
    public function get(): array;

    public function check(int $answer): bool;
}
