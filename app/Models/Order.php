<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'rute_id',
        'kode',
        'passenger_name',
        'passenger_ktp',
        'seat_code',
    ];

    public function rute(): BelongsTo
    {
        return $this->belongsTo(Rute::class);
    }

    public function passenger(): BelongsTo
    {
        return $this->belongsTo(Passenger::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
