<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $table = 'races';

    protected $fillable = [
        'date',
        'time',
        'country',
        'city',
        'laps',
    ];
}
