<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prisoner extends Model
{
    use HasFactory, SoftDeletes;

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class);
    }

    public function cell()
    {
        return $this->belongsToMany(Cell::class);
    }
}
