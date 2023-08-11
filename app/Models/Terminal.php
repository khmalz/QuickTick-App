<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Terminal extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'name'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
