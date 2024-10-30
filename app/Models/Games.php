<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'date',
        'about',
        'price',
        'developer',
        'url',
        'publisher',
        'activation',
        'system',
        'typeof',
    ];
}
