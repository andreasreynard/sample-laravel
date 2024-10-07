<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'webdev',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'ml',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Data Structure',
            'slug' => 'strucdat',
            'color' => 'yellow'
        ]);

        // Category::factory(3)->create();
    }
}
