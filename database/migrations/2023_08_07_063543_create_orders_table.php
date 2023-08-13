<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('passenger_id')->references('id')->on('passengers')->cascadeOnDelete();
            $table->foreignId('rute_id')->references('id')->on('rutes')->cascadeOnDelete();
            $table->ulid('kode')->unique();
            $table->string('passenger_name');
            $table->string('passenger_ktp');
            $table->string('seat_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
