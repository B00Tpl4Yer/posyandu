<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $pengguna = User::create([
            'name' => 'pengguna',
            'email' => 'pengguna@example.com',
            'password' => bcrypt('password'),
        ]);
        $pengguna->assignRole('pengguna terdaftar');

    }
}
