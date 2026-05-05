<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::create(['name' => 'Musik', 'slug' => 'musik', 'description' => 'Event musik dan konser']);
        \App\Models\Category::create(['name' => 'Teknologi', 'slug' => 'teknologi', 'description' => 'Workshop dan seminar teknologi']);
        \App\Models\Category::create(['name' => 'Olahraga', 'slug' => 'olahraga', 'description' => 'Event olahraga dan turnamen']);
        \App\Models\Category::create(['name' => 'Pendidikan', 'slug' => 'pendidikan', 'description' => 'Event pendidikan dan belajar']);
    }
}
