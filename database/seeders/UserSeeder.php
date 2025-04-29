<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      user::insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => hash::make('111'),
        'role_id' => 1,
      ],
      [
        'name' => 'user',
        'email' => 'user@gmail.com',
        'password' => hash::make('111'),
        'role_id' => 2,
      ]);
    }
}
