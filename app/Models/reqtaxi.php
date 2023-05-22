<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reqtaxi extends Model
{
    use HasFactory;
    protected $fillable = [
        'p_lat',
        'p_long',
        'd_lat',
        'd_long',
        'distance',
        'duration',
        'payment',
        'selectedOption',
        'price',
        'detail',
        'Userid',
        'username',
        'tell',
        'status',
        
    ];
}
