<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AcademicYear;

class AcademicYearCreatePage extends Component
{
    public $name;
    public $active = true;
    public $is_open_for_admission = false;
    public $start;
    public $end;

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255|unique:academic_years,name',
            'active' => 'boolean',
            'is_open_for_admission' => 'boolean',
            'start' => 'nullable|date',
            'end' => 'nullable|date',
        ]);

        AcademicYear::create($validatedData);

        return redirect()->route('academic-years.index');
    }

    public function render()
    {
        return view('livewire.academic-year-create-page');
    }
}
