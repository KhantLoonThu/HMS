<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'name' => 'Dr David',
            'email' => 'david@hms.com',
            'phone' => '09999150099',
            'specialization' => 'operation',
            'department_id' => 1
        ]);

        Doctor::create([
            'name' => 'Dr Sain',
            'email' => 'sain@hms.com',
            'phone' => '09922140099',
            'specialization' => 'child',
            'department_id' => 2
        ]);
    }
}
