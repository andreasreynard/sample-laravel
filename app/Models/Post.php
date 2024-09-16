<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'slug' => 'judul-artikel-1',
                'title' => 'My Own Article in This Post',
                'author' => 'Andreas Reynard Samsico',
                'body' => 'Perkenalkan nama saya Andreas Reynard Samsico, boleh dipanggil Reynard (kalau ada yang panggil saya Andreas juga aman), dengan NRP 5025221020 yang sedang mengambil jurusan Teknik Informatika di ITS (Institut Teknologi Sepuluh Nopember). Saya menggunakan Laravel untuk belajar PBKK dengan menonton YouTube tutorial di ITS Classroom. Sekian dari saya, terima kasih semuannya yang sedang membaca ini.'
            ],
            [
                'slug' => 'judul-artikel-2',
                'title' => 'Dummy Article',
                'author' => 'Cicero',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu diam scelerisque, gravida ex at, malesuada lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere faucibus velit, ut semper quam vulputate sed. Integer mollis nunc at enim euismod iaculis eget at dolor. Nunc malesuada enim vel tempor molestie. Nunc aliquet elementum odio ut rhoncus. Vivamus sed condimentum sem. Mauris porta tellus eros, id ultrices lacus tincidunt at. Nulla libero libero, accumsan a lacinia eu, eleifend in purus. Morbi mattis mauris quis eros finibus, in fermentum nulla dapibus. Mauris sodales metus tellus, eu vestibulum tortor mollis auctor.'
            ]
        ];
    }
    
    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
    
}