<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
