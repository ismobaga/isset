<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            'niveau' => 'Bachelor',
            'name' => 'Computer Science',
            'description' => 'A program focused on the study of computer systems and computational processes.',
            'duration' => '3 years',
            'conditions' => 'High school diploma or equivalent',
        ]);

        Program::create([
            'niveau' => 'Master',
            'name' => 'Data Science',
            'description' => 'A program focused on the study of data analysis and machine learning.',
            'duration' => '2 years',
            'conditions' => 'Bachelor degree in a related field',
        ]);
    }
}
