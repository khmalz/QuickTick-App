<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $fillable = [
        'buses_id',
        'tujuan',
        'rute_awal',
        'rute_akhir',
        'harga',
    ];
}
