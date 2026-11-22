<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $roles = ['admin', 'author', 'user'];
        // foreach ($roles as $role) {
        //     \App\Models\Role::firstOrCreate(['name' => $role]);
        // }

        $roles = [[
            'name' => 'admin',
        ], [
            'name' => 'author',
        ], [
            'name' => 'user',
        ]];
        Role::insert($roles);
    }
}
