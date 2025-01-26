<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AcademicYear;

class AcademicYearEditPage extends Component
{
    public $academicYear;
    public $name;
    public $active;
    public $is_open_for_admission;
    public $start;
    public $end;

    public function mount(AcademicYear $academicYear)
    {
        $this->academicYear = $academicYear;
        $this->name = $academicYear->name;
        $this->active = $academicYear->active;
        $this->is_open_for_admission = $academicYear->is_open_for_admission;
        $this->start = $academicYear->start;
        $this->end = $academicYear->end;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255|unique:academic_years,name,' . $this->academicYear->id,
            'active' => 'boolean',
            'is_open_for_admission' => 'boolean',
            'start' => 'nullable|date',
            'end' => 'nullable|date',
        ]);

        $this->academicYear->update($validatedData);

        return redirect()->route('academic-years.index');
    }

    public function render()
    {
        return view('livewire.academic-year-edit-page', [
            'academicYear' => $this->academicYear,
        ]);
    }
}
