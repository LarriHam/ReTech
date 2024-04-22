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
        User::create([
            'name' => 'Larry',
            'email' => 'admin@gmail.com',
            'password' => 'secret',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Mary',
            'email' => 'review@gmail.com',
            'password' => 'secret',
            'role' => 'reviewer',
        ]);

        User::create([
            'name' => 'Dan',
            'email' => 'ordinaryuser@gmail.com',
            'password' => 'secret',
            'role' => 'ordinary_user',
        ]);
    }
}
