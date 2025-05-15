<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $technician = new Technician();
    $technician->document = '111644478888';
    $technician->name = 'Pepito Parra';
    $technician->phone = '+57 300 457 8542';
    }
}
