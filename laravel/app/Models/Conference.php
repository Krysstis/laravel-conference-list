<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['title', 'description', 'date', 'address', 'participant_count'];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
