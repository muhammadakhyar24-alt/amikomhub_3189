<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Event::create([
            'category_id' => 1,
            'title' => 'Jazz Night 2026: A Celebration',
            'description' => 'Nikmati pertunjukan jazz terbaik dengan musisi-musisi profesional',
            'date' => '2026-05-16 19:30:00',
            'location' => 'Gedung Graha Amikom',
            'price' => 150000,
            'stock' => 100
        ]);

        \App\Models\Event::create([
            'category_id' => 2,
            'title' => 'AI & Future: Unleash The Power',
            'description' => 'Workshop teknologi AI terkini untuk para profesional',
            'date' => '2026-06-26 09:00:00',
            'location' => 'Amikom Convention Center',
            'price' => 50000,
            'stock' => 150
        ]);

        \App\Models\Event::create([
            'category_id' => 2,
            'title' => 'Hackathon 2026: Ultimate Marathon',
            'description' => 'Kompetisi coding terbesar dengan hadiah menarik',
            'date' => '2026-07-18 08:00:00',
            'location' => 'Amikom Campus',
            'price' => 0,
            'stock' => 200
        ]);

        \App\Models\Event::create([
            'category_id' => 3,
            'title' => 'Marathon Amikom 2026',
            'description' => 'Event lari marathon terbesar se-Yogyakarta',
            'date' => '2026-08-10 06:00:00',
            'location' => 'Taman Pintar Yogyakarta',
            'price' => 100000,
            'stock' => 500
        ]);

        \App\Models\Event::create([
            'category_id' => 4,
            'title' => 'Seminar Kewirausahaan Digital',
            'description' => 'Belajar strategi bisnis digital dari para ahli',
            'date' => '2026-05-20 14:00:00',
            'location' => 'Aula Utama Amikom',
            'price' => 25000,
            'stock' => 300
        ]);

        \App\Models\Event::create([
            'category_id' => 1,
            'title' => 'Konser Musik Nasional',
            'description' => 'Konser musik bersama artis-artis ternama Indonesia',
            'date' => '2026-09-15 20:00:00',
            'location' => 'Stadion Kridosono',
            'price' => 250000,
            'stock' => 1000
        ]);
    }
}
