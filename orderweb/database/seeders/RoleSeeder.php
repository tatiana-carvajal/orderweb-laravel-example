<?php

namespace Database\Seeders;
USE APP\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => 'ASMINISTRADOR'],
            ['name' => 'SUPERVISOR']

        ]);
    }
}
