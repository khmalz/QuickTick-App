<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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

    protected $with = ['bus'];

    protected $appends = ['order_count', 'passenger_count', 'available_seats'];

    protected function orderCount(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->orders()->count(),
        );
    }

    protected function availableSeats(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->bus->seat - $this->passenger_count,
        );
    }

    protected function passengerCount(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->passengerOrders->count(),
        );
    }

    public function passengerOrders(): HasManyThrough
    {
        return $this->hasManyThrough(PassengerOrder::class, Order::class);
    }

    /**
     * Get the rute's harga.
     */
    protected function harga(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format($value, 0, ',', '.'),
        );
    }

    /**
     * Get the rute's departure.
     */
    protected function departure(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::parse($value)->format('H:i - d F Y'),
        );
    }

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

    public function scopeWhereAvailableSeats($query)
    {
        return $query->whereRelation('bus', 'seat', '>', DB::raw('(SELECT COUNT(*) FROM passenger_orders 
                          INNER JOIN orders ON passenger_orders.order_id = orders.id 
                          WHERE orders.rute_id = rutes.id)'));
    }
}
