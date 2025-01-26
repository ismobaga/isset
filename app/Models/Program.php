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
    ];
}
