<?php

namespace Database\Seeders;

use App\Models\Rute;
use App\Models\User;
use App\Models\Order;
use App\Models\Passenger;
use App\Helpers\MixCaseULID;
use App\Models\PassengerOrder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rute = Rute::inRandomOrder()->first();

        $user = User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('Penumpang');

        $passenger = Passenger::create([
            'user_id' => $user->id,
            'telephone' => fake('id_ID')->phoneNumber(),
            'gender' => rand(0, 1) ? "L" : "P",
        ]);

        $order = Order::create([
            'passenger_id' => $passenger->id,
            'rute_id' => $rute->id,
        ]);

        for ($i = 1; $i <= rand(2, 4); $i++) {
            PassengerOrder::create([
                'order_id' => $order->id,
                'kode' =>  MixCaseULID::generate(),
                'passenger_name' => fake('id_ID')->name(),
                'passenger_ktp' => fake()->isbn10(),
                'seat_code' => rand(1, 46),
            ]);
        }

        $user = User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('Penumpang');

        $passenger = Passenger::create([
            'user_id' => $user->id,
            'telephone' => fake('id_ID')->phoneNumber(),
            'gender' => rand(0, 1) ? "L" : "P",
        ]);

        $order = Order::create([
            'passenger_id' => $passenger->id,
            'rute_id' => $rute->id,
        ]);

        for ($i = 1; $i <= rand(2, 4); $i++) {
            PassengerOrder::create([
                'order_id' => $order->id,
                'kode' =>  MixCaseULID::generate(),
                'passenger_name' => fake('id_ID')->name(),
                'passenger_ktp' => fake()->isbn10(),
                'seat_code' => rand(1, 46),
            ]);
        }

        $user = User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('Penumpang');

        $passenger = Passenger::create([
            'user_id' => $user->id,
            'telephone' => fake('id_ID')->phoneNumber(),
            'gender' => rand(0, 1) ? "L" : "P",
        ]);

        $order = Order::create([
            'passenger_id' => $passenger->id,
            'rute_id' => $rute->id,
        ]);

        for ($i = 1; $i <= rand(2, 4); $i++) {
            PassengerOrder::create([
                'order_id' => $order->id,
                'kode' =>  MixCaseULID::generate(),
                'passenger_name' => fake('id_ID')->name(),
                'passenger_ktp' => fake()->isbn10(),
                'seat_code' => rand(1, 46),
            ]);
        }
    }
}
