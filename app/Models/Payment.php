<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'method',
    ];

    protected $with = ['va', 'card', 'wallet'];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function va(): HasOne
    {
        return $this->hasOne(VirtualAccount::class);
    }

    public function card(): HasOne
    {
        return $this->hasOne(Card::class);
    }

    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class);
    }
}
