<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'name' => 'Hla Hla',
            'age' => 23,
            'phone' => '09423445489',
            'address' => '54 St. Sanchaung, Yangon',
        ]);

        Patient::create([
            'name' => 'Mya Mya',
            'age' => 28,
            'phone' => '09423449022',
            'address' => '43 St. North Dagon, Yangon',
        ]);

        Patient::create([
            'name' => 'Michel U Ba',
            'age' => 45,
            'phone' => '09422111567',
            'address' => '115 St. Chanmyatharzi, Mandalay',
        ]);
    }
}
