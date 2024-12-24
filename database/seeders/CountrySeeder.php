<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['Georgia', 'France', 'Germany', 'Italy', 'Spain', 'Switzerland'] as $countryName) {
            Country::firstOrCreate(['name' => $countryName]);
        }
    }
}
