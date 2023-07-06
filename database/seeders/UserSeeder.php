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
            'name' => 'Amria Rendy',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Jhon Doe',
            'email' => 'user@admin.com',
            'password' => bcrypt('1234'),
        ]);

        $user->assignRole('user');
    }
}
