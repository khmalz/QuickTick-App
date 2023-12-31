<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Rute;
use Illuminate\Database\Seeder;

class RuteSeeder extends Seeder
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

        foreach ($terminals as $asal => $daftarTerminal) {
            foreach ($daftarTerminal as $ruteAwal) {
                foreach ($terminals as $tujuan => $daftarTujuan) {
                    foreach ($daftarTujuan as $ruteAkhir) {
                        $randomBus = Bus::inRandomOrder()->first();

                        if ($asal !== $tujuan && $ruteAwal !== $ruteAkhir) {
                            Rute::create([
                                'bus_id' => $randomBus->id,
                                'asal' => $asal,
                                'rute_awal' => $ruteAwal,
                                'tujuan' => $tujuan,
                                'rute_akhir' => $ruteAkhir,
                                'harga' => 200000,
                                'departure' => fake()->dateTimeBetween('now', '+2 week'),
                            ]);
                        }
                    }
                }
            }
        }
    }
}
