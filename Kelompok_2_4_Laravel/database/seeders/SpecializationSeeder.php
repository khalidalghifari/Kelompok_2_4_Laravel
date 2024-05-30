<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialization::create([
            'Specialization' => 'Orthopedics',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Internal Medicine',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Obstetrics and Gynecology',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Dermatology',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Pediatrics',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Radiology',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'General Surgery',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Ophthalmology',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Family Medicine',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Chest Medicine',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Anesthesia',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'Pathology',
            'created_at' => now(),
        ]);
        Specialization::create([
            'Specialization' => 'ENT',
            'created_at' => now(),
        ]);
    }
}
