<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citiesByCountry = [
            'Georgia' => ['Rustavi', 'Gori', 'Telavi', 'Zugdidi'],
            'France' => ['Paris', 'Lyon', 'Marseille', 'Nice'],
            'Germany' => ['Berlin', 'Munich', 'Frankfurt', 'Hamburg'],
            'Italy' => ['Rome', 'Milan', 'Naples', 'Florence'],
            'Spain' => ['Madrid', 'Barcelona', 'Valencia', 'Seville'],
            'Switzerland' => ['Zurich', 'Geneva', 'Bern', 'Lausanne'],
        ];

        foreach ($citiesByCountry as $countryName => $cities) {
            $country = Country::where('name', $countryName)->first();

            if ($country) {
                foreach ($cities as $cityName) {
                    $country->cities()->firstOrCreate(['name' => $cityName]);
                }
            }
        }
    }
}
