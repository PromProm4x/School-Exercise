<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [[
            'name' => 'Admin User',
            'email' => 'admin@blog.com',
            'password' => bcrypt('11223344'),
            'remember_token' => Str::random(10),
            // 'password' => Hash::make('11223344'),
            'role_id' => 1,
        ],
        [
            'name' => 'Author User',
            'email' => 'author@blog.com',
            'password' => bcrypt('11223344'),
            'remember_token' => Str::random(10),
            // 'password' => Hash::make('11223344'),
            'role_id' => 2,
        ],
        [
            'name' => 'User User',
            'email' => 'user@blog.com',
            'password' => bcrypt('11223344'),
            'remember_token' => Str::random(10),
            // 'password' => Hash::make('11223344'),
            'role_id' => 3,
        ]];
        User::insert($users);
    }
}
