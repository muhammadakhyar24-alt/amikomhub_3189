<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Array logo URLs yang valid
        $logos = [
            'https://via.placeholder.com/200x100?text=Partner1',
            'https://via.placeholder.com/200x100?text=Partner2',
            'https://via.placeholder.com/200x100?text=Partner3',
            'https://via.placeholder.com/200x100?text=Partner4',
            'https://via.placeholder.com/200x100?text=Partner5',
        ];

        for ($i = 0; $i < 5; $i++) {
            Partner::create([
                'name' => $faker->company(),
                'logo_url' => $logos[$i]
            ]);
        }
    }
}
