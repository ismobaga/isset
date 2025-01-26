<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'niveau',
        'name',
        'description',
        'image',
        'duration',
        'conditions',
        'parent_id',
        'program_info_pdf', // Add this line
    ];

    public function parent()
    {
        return $this->belongsTo(Program::class, 'parent_id');
    }
}
