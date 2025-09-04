<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publisher::create([
            'name' => 'Erlangga',
            'slug' => 'erlangga',
            'address' => 'Jln. Kenanga, Jakarta Pusat',
            'phone' => '085172326282'
        ]);
        Publisher::create([
            'name' => 'Darul Quro',
            'slug' => 'darul-quro',
            'address' => 'Jln. Kamboja, Jakarta Timur',
            'phone' => '085172358372'
        ]);
        Publisher::create([
            'name' => 'Pustaka Jerami',
            'slug' => 'pustaka-jerami',
            'address' => 'Jln. Gingseng, Papua Timur',
            'phone' => '098383729712'
        ]);
        Publisher::create([
            'name' => 'Jendela Dunia',
            'slug' => 'jendela-dunia',
            'address' => 'Jln. Operasi Militer, Bengkulu',
            'phone' => '088298749233'
        ]);
    }
}
