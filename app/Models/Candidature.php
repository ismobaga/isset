<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\CandidatureDecisionUpdated;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'identity_document',
        'state',
        'program_info',
        'decision_letter',
    ];

    // Add the relationship to the Program model
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    // Add the relationship to the AcademicYear model
    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    // Fire an event when the decision is updated
    protected static function booted()
    {
        static::updated(function ($candidature) {
            if ($candidature->isDirty('state')) {
                event(new CandidatureDecisionUpdated($candidature));
            }
        });
    }
}
