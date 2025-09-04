<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Filsafat',
            'slug' => 'filsafat',
            'description' => 'Bacaannya Bung Rocky Gerung',
        ]);
        Category::create([
            'name' => 'Hukum',
            'slug' => 'hukum',
            'description' => 'Bacaannya Jaksa Pinangki',
        ]);
        Category::create([
            'name' => 'Matematika',
            'slug' => 'matematika',
            'description' => 'Bacaannya Jerome Polin',
        ]);
        Category::create([
            'name' => 'Keuangan',
            'slug' => 'keuangan',
            'description' => 'Bacaannya Bu Sri Mulyani',
        ]);
        Category::create([
            'name' => 'Pertanian',
            'slug' => 'pertanian',
            'description' => 'Bacaannya Pak Mentan',
        ]);
        Category::create([
            'name' => 'Kehutanan',
            'slug' => 'kebutanan',
            'description' => 'Bacaannya Mulyono',
        ]);
    }
}
