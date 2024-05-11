<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create two admin users with admin role
        User::create([
            'name' => 'Admin User 1',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('password1'), // You can use bcrypt() as well
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin User 2',
            'email' => 'admin2@admin.com',
            'password' => Hash::make('password2'),
            'role' => 'admin',
        ]);
    }
}
