<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            CompanyBusSeeder::class,
            RuteSeeder::class,
            CityTerminalSeeder::class,
            OrderSeeder::class
        ]);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'Petugas 1',
            'email' => 'petugas1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);

        $user->assignRole('Petugas');

        $user = User::create([
            'name' => 'Petugas 2',
            'email' => 'petugas2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);

        $user->assignRole('Petugas');
    }
}
