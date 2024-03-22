<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Membuat role
          $adminRole = Role::create(['name' => 'admin']);
          $penggunaTerdaftarRole = Role::create(['name' => 'pengguna terdaftar']);


          // Pengguna tidak terdaftar mungkin tidak memiliki permission tertentu, tergantung pada kebijakan aplikasi.
    }
}
