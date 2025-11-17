<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Membuat satu user utama (Admin/testing)
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Password: password
        ]);

        // 2. Membuat 9 user palsu tambahan menggunakan UserFactory
        // Sehingga total ada 10 user
        User::factory()->count(9)->create(); 
    }
}