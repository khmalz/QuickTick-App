<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_id',
        'rute_id',
        'status',
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

    public function passengerOrders(): HasMany
    {
        return $this->hasMany(PassengerOrder::class);
    }

    public function scopeWhereStatus($query, string $status)
    {
        return $query->where('status', $status);
    }

    public function scopeByAsal($query, string $asal)
    {
        return $query->whereHas('rute', function ($query) use ($asal) {
            $query->where('asal', $asal);
        });
    }

    public function scopeByTujuan($query, string $tujuan)
    {
        return $query->whereHas('rute', function ($query) use ($tujuan) {
            $query->where('tujuan', $tujuan);
        });
    }

    public function scopeByDeparture($query, Carbon|string $departure)
    {
        return $query->whereHas('rute', function ($query) use ($departure) {
            $query->whereDate('departure', $departure);
        });
    }
}
