<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;

    protected $fillable = [
        'housenumber',
        'max_inhabitants',
        'tv',
        'isolation',
    ];

    public function prisoners()
    {
        return $this->belongsToMany(Prisoner::class);
    }
}
