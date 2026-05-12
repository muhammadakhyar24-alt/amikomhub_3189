<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            ['name' => 'PT Teknologi Indonesia', 'logo_url' => 'https://placeholder.co/200x200'],
            ['name' => 'CV Inovasi Digital', 'logo_url' => 'https://placeholder.co/200x200'],
            ['name' => 'PT Solusi Bisnis', 'logo_url' => 'https://placeholder.co/200x200'],
            ['name' => 'Startup Kreative Media', 'logo_url' => 'https://placeholder.co/200x200'],
            ['name' => 'PT Jaya Makmur Sejahtera', 'logo_url' => 'https://placeholder.co/200x200'],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
