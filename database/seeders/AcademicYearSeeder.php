<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AcademicYear;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicYear::create([
            'name' => '2023-2024',
            'active' => true,
            'is_open_for_admission' => true,
            'start' => '2023-09-01',
            'end' => '2024-06-30',
        ]);

        AcademicYear::create([
            'name' => '2024-2025',
            'active' => false,
            'is_open_for_admission' => true,
            'start' => '2024-09-01',
            'end' => '2025-06-30',
        ]);
    }
}
