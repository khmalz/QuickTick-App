<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PassengerOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'kode',
        'passenger_name',
        'passenger_ktp',
        'seat_code',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
