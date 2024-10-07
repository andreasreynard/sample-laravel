<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::create([
        //     'title' => 'My Own Article in This Post',
        //     'author_id' => 12,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Perkenalkan nama saya Andreas Reynard Samsico, boleh dipanggil Reynard (kalau ada yang panggil saya Andreas juga aman), dengan NRP 5025221020 yang sedang mengambil jurusan Teknik Informatika di ITS (Institut Teknologi Sepuluh Nopember). Saya menggunakan Laravel untuk belajar PBKK dengan menonton YouTube tutorial di ITS Classroom. Sekian dari saya, terima kasih semuannya yang sedang membaca ini.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
