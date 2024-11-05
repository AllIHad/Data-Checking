<?php

namespace Database\Seeders;

use App\Models\DataProduk;
use App\Models\DataSuplier;
use App\Models\KategoriBarang;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'email' => 'example@mail.com',
            'username' => 'Rizki',
            'password' => Hash::make('12izki22--'),
            'role' => '1',
        ]);

        User::create([
            'email' => 'example@mail.com',
            'username' => 'yuli',
            'password' => Hash::make('12izki22--'),
            'role' => 'pemilik',
        ]);

        User::create([
            'email' => 'example@mail.com',
            'username' => 'jijul',
            'password' => Hash::make('12izki22--'),
            'role' => 'pemilik',
        ]);

        User::create([
            'email' => 'example@mail.com',
            'username' => 'rani',
            'password' => Hash::make('12izki22--'),
            'role' => 'pemilik',
        ]);

        User::create([
            'email' => 'example@mail.com',
            'username' => 'aji',
            'password' => Hash::make('12izki22--'),
            'role' => 'pemilik',
        ]);

        User::create([
            'email' => 'example@mail.com',
            'username' => 'ibad',
            'password' => Hash::make('12izki22--'),
            'role' => 'pemilik',
        ]);

    }
}
