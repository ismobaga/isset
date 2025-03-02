<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Candidature;
use App\Models\Program;
use App\Models\AcademicYear;

class CreateCandidaturePage extends Component
{
    use WithFileUploads;

    public $firstname, $lastname, $email, $phone, $date_of_birth, $place_of_birth, $nationality, $program_id, $academic_year_id;
    public $photo, $diplomas, $transcripts, $certificate, $resume, $identity_document;
    public $programs, $academicYears;

    public function mount()
    {
        $this->programs = Program::all();
        $this->academicYears = AcademicYear::all();
    }

    public function submit()
    {
        $this->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'program_id' => 'required|exists:programs,id',
            'academic_year_id' => 'required|exists:academic_years,id',
            'photo' => 'required|image|max:1024',
            'diplomas' => 'required|file|max:2048',
            'transcripts' => 'required|file|max:2048',
            'certificate' => 'nullable|file|max:2048',
            'resume' => 'nullable|file|max:2048',
            'identity_document' => 'required|file|max:2048',
        ]);

        $candidature = Candidature::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth,
            'place_of_birth' => $this->place_of_birth,
            'nationality' => $this->nationality,
            'program_id' => $this->program_id,
            'academic_year_id' => $this->academic_year_id,
            'photo' => $this->photo ? $this->photo->store('photos') : null,
            'diplomas' => $this->diplomas ? $this->diplomas->store('diplomas') : null,
            'transcripts' => $this->transcripts ? $this->transcripts->store('transcripts') : null,
            'certificate' => $this->certificate ? $this->certificate->store('certificates') : null,
            'resume' => $this->resume ? $this->resume->store('resumes') : null,
            'identity_document' => $this->identity_document ? $this->identity_document->store('identity_documents') : null,
        ]);

        session()->flash('message', 'Candidature submitted successfully.');

        // Clear form fields
        $this->reset([
            'firstname',
            'lastname',
            'email',
            'phone',
            'date_of_birth',
            'place_of_birth',
            'nationality',
            'program_id',
            'academic_year_id',
            'photo',
            'diplomas',
            'transcripts',
            'certificate',
            'resume',
            'identity_document'
        ]);
    }

    public function render()
    {
        return view('livewire.create-candidature-page')
            ->layout('layouts.front');
    }
}
