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
        
        // Array logo URLs dari CDN yang reliable
        $logos = [
            'https://dummyimage.com/200x100/0066cc/FFFFFF?text=Partner+1',
            'https://dummyimage.com/200x100/ff6600/FFFFFF?text=Partner+2',
            'https://dummyimage.com/200x100/00cc66/FFFFFF?text=Partner+3',
            'https://dummyimage.com/200x100/cc0066/FFFFFF?text=Partner+4',
            'https://dummyimage.com/200x100/6600cc/FFFFFF?text=Partner+5',
        ];

        for ($i = 0; $i < 5; $i++) {
            Partner::create([
                'name' => $faker->company(),
                'logo_url' => $logos[$i]
            ]);
        }
    }
}
