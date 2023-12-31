<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTerminalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terminals = [
            'Jakarta Pusat' => [
                'Terminal Gambir',
                'Terminal Senen',
            ],
            'Jakarta Utara' => [
                'Terminal Pulogebang',
                'Terminal Kalideres',
            ],
            'Jakarta Selatan' => [
                'Terminal Lebak Bulus',
                'Terminal Kampung Rambutan',
            ],
            'Jakarta Timur' => [
                'Terminal Rawamangun',
                'Terminal Pulo Gadung',
            ],
            'Jakarta Barat' => [
                'Terminal Grogol',
                'Terminal Kebon Jeruk',
            ],
            'Bandung' => [
                'Terminal Leuwipanjang',
                'Terminal Cicaheum',
            ],
            'Bekasi' => [
                'Terminal Pondok Gede',
                'Terminal Bekasi',
            ],
            'Depok' => [
                'Terminal Depok',
                'Terminal Citayam',
            ],
            'Bogor' => [
                'Terminal Baranangsiang',
                'Terminal Taman Yasmin',
            ],
            'Cimahi' => [
                'Terminal Cibabat',
                'Terminal Cimindi',
            ],
            'Semarang' => [
                'Terminal Mangkang',
                'Terminal Terboyo',
            ],
            'Solo' => [
                'Terminal Tirtonadi',
                'Terminal Palur',
            ],
            'Salatiga' => [
                'Terminal Ledok',
                'Terminal Argomulyo',
            ],
            'Magelang' => [
                'Terminal Tidar',
                'Terminal Mertoyudan',
            ],
            'Surabaya' => [
                'Terminal Bungurasih',
                'Terminal Joyoboyo',
            ],
            'Malang' => [
                'Terminal Arjosari',
                'Terminal Landungsari',
            ],
            'Sidoarjo' => [
                'Terminal Porong',
                'Terminal Gedangan',
            ],
            'Mojokerto' => [
                'Terminal Tipes',
                'Terminal Jetis',
            ],
            'Blitar' => [
                'Terminal Blitar',
                'Terminal Talun',
            ],
            'Bali' => [
                'Terminal Ubung',
                'Terminal Batubulan',
            ],
            'Medan' => [
                'Terminal Pinang Baris',
                'Terminal Amplas',
            ],
            'Palembang' => [
                'Terminal Alang-Alang Lebar',
                'Terminal Karya Jaya',
            ],
        ];

        foreach ($terminals as $cityName => $terminalNames) {
            $city = City::create(['name' => $cityName]);

            foreach ($terminalNames as $terminalName) {
                $city->terminals()->create(['name' => $terminalName]);
            }
        }
    }
}
