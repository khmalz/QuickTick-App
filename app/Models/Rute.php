<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rute extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'tujuan',
        'rute_awal',
        'rute_akhir',
        'harga',
    ];

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
