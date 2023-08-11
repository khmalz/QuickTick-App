<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rute extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'asal',
        'tujuan',
        'rute_awal',
        'rute_akhir',
        'harga',
        'departure',
    ];

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    protected $casts = [
        'departure' => 'datetime',
    ];

    /**
     * Get the rute's harga.
     */
    protected function harga(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format($value, 0, ',', '.'),
        );
    }
}
