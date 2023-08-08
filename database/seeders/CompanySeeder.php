<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
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
    }
}
