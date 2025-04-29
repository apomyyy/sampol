<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;  // Correct order
use App\Models\User;
use Illuminate\Support\Facades\Hash;  // Correct the spelling here

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role_id' => 1,
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role_id' => 2,
            ],
        ]);
    }
}
