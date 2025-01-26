<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AcademicYear;

class AcademicYearIndexPage extends Component
{
    public $academicYears;

    public function mount()
    {
        $this->academicYears = AcademicYear::all();
    }

    public function render()
    {
        return view('livewire.academic-year-index-page', [
            'academicYears' => $this->academicYears,
        ]);
    }
}
