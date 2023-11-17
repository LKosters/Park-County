<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'automatic',
        'fuel',
        'license_plate',
    ];
}
