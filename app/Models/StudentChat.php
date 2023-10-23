<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentChat extends Model
{
    use HasFactory;
    use HasUlids;   

    public function scopeStart(int|string $chat_id) : StudentChat 
    {
        $result = $this->where('chat_id', $chat_id)->first();
        if($result) {
            return $result;
        }
        return $result;
    }
}
