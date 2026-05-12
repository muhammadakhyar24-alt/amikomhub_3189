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
        
        // Dummy logo filenames (akan disimpan di storage/app/public/logos)
        $logos = [
            'partner-1.png',
            'partner-2.png',
            'partner-3.png',
            'partner-4.png',
            'partner-5.png',
        ];

        for ($i = 0; $i < 5; $i++) {
            Partner::create([
                'name' => $faker->company(),
                'logo' => $logos[$i]
            ]);
        }
    }
}
