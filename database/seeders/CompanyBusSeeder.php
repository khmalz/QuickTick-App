<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Helpers\GenerateInitial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyBusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            'Ezri',
            'Borlindo',
            'Hiba Group',
            'Mayasari Bakti',
            'Sempati Star',
            'Steady Safe',
        ];

        foreach ($companies as $company) {
            Company::create(["name" => $company]);
        }

        $busTypes = [
            'Executive',
            'Double Decker',
            'Executive AC',
            'Super Executive',
            'Executive Sleeper',
            'Super Executive Sleeper',
        ];

        $initialCompanies = GenerateInitial::generate($companies);
        $initialBuses = GenerateInitial::generate($busTypes);

        $Buses = [];

        foreach ($companies as $companyIndex => $company) {
            $companyIndex++; // Menambahkan 1 untuk memulai dari indeks 1
            $companyInitial = $initialCompanies[$companyIndex - 1]; // Mengakses array dengan indeks yang benar
            foreach ($busTypes as $busTypeIndex => $busType) {
                $busTypeInitial = $initialBuses[$busTypeIndex];

                $uuid = (string) Str::uuid();
                $numeric3 = substr(preg_replace('/[^0-9]/', '', $uuid), 0, 3);

                $busCode = $companyInitial . $busTypeInitial . '-' . $numeric3;

                $Buses[] = [
                    'company' => $companyIndex,
                    'kode' => $busCode,
                    'name' => $busType,
                ];
            }
        }

        foreach ($Buses as $bus) {
            Bus::create([
                "company_id" => $bus["company"],
                "kode" => $bus["kode"],
                "name" => $bus["name"],
                "seat" => 35
            ]);
        }
    }
}
