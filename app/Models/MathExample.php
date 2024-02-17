<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\MathExampleType;


class MathExample extends Model
{
    use HasFactory;
    protected $casts = [
        'type' => MathExampleType::class,
    ];


}
