<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    use HasFactory;

    protected $table = 'guess';

    protected $fillable = [
        'user_id',
        'pole',
        'first',
        'second',
        'third',
        'race_id',
    ];
}
