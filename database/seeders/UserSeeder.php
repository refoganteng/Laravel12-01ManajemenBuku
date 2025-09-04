<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Revo Nando',
            'username' => 'revo_nando',
            'email' => 'refonndd@gmail.com',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'Rezqy Trie Aningrum',
            'username' => 'rezqy_trie',
            'email' => 'arezqy97@gmail.com',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'Ahmad Kaffa Arnando',
            'username' => 'ahmad_kaffa',
            'email' => 'kaffakappoy@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
