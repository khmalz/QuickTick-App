<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function terminals(): HasMany
    {
        return $this->hasMany(Terminal::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
