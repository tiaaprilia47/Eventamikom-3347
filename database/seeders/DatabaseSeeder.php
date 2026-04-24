<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Kategori Event
        $seminar = \App\Models\Category::firstOrCreate([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $entertainment = \App\Models\Category::firstOrCreate([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $workshop = \App\Models\Category::firstOrCreate([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        // 3. Events

        // EVENT 1
        \App\Models\Event::create([
            'category_id' => $entertainment->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam santai dengan alunan musik jazz live.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Hall',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        // EVENT 2
        \App\Models\Event::create([
            'category_id' => $seminar->id,
            'title' => 'AI & Future Tech Summit 2026',
            'description' => 'Bahas tren AI, machine learning, dan masa depan teknologi.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 75000,
            'stock' => 120,
            'poster_path' => 'posters/event-2.png',
        ]);

        // EVENT 3
        \App\Models\Event::create([
            'category_id' => $seminar->id,
            'title' => 'Cyber Security Awareness',
            'description' => 'Pelajari cara melindungi data dan sistem dari serangan cyber.',
            'date' => '2026-05-07 10:00:00',
            'location' => 'Ruang Seminar 1',
            'price' => 40000,
            'stock' => 80,
            'poster_path' => 'posters/event-3.png',
        ]);

        // EVENT 4
        \App\Models\Event::create([
            'category_id' => $workshop->id,
            'title' => 'UI/UX Design Masterclass',
            'description' => 'Belajar desain aplikasi yang user-friendly dari dasar.',
            'date' => '2026-05-12 09:00:00',
            'location' => 'Lab Multimedia',
            'price' => 100000,
            'stock' => 50,
            'poster_path' => 'posters/event-4.png',
        ]);

        // EVENT 5
        \App\Models\Event::create([
            'category_id' => $workshop->id,
            'title' => 'Laravel Bootcamp',
            'description' => 'Pelatihan intensif membuat web app dengan Laravel.',
            'date' => '2026-05-15 08:00:00',
            'location' => 'Lab Programming',
            'price' => 150000,
            'stock' => 40,
            'poster_path' => 'posters/event-5.png',
        ]);

        // EVENT 6
        \App\Models\Event::create([
            'category_id' => $entertainment->id,
            'title' => 'E-Sport U-Champ Tournament',
            'description' => 'Turnamen game antar mahasiswa dengan hadiah menarik.',
            'date' => '2026-05-20 16:00:00',
            'location' => 'Auditorium',
            'price' => 25000,
            'stock' => 200,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}