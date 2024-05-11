<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepeartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Surgeon',
            'description' => 'Surgeon',
            'phone' => '09123456789',
            'location' => 'Building A, room 001'
        ]);

        Department::create([
            'name' => 'Child',
            'description' => 'Child',
            'phone' => '09987654321',
            'location' => 'Building A, room 002'
        ]);

        Department::create([
            'name' => 'Brain and Nerve',
            'description' => 'Brain and Nerve',
            'phone' => '09400200101',
            'location' => 'Building B, room 001'
        ]);

        Department::create([
            'name' => 'Physiology',
            'description' => 'Physiology',
            'phone' => '09400200100',
            'location' => 'Building B, room 002'
        ]);
    }
}
