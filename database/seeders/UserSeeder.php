<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::create([
            'first_name'     => 'youssef',
            'last_name'     => 'you',
            'email'    => 'youssef@gmail.com',
            'ville' =>'casa',
            'password' => '123AZE',
            'role'     => 'admin',
        ]);
    }
}
