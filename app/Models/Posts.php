<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function users(): BelongsTo
    {
        return $this->belongsTo(Users::class);
    }

     public function comments(): HasMany
    {
        return $this->hasMany(Comments::class);
    }
}
