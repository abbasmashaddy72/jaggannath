<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'number',
        'email',
        'phone',
        'how',
        'initial_response',
        'explanation_of_treatment',
        'cost_treatment',
        'reception_rating',
        'dmo_rating',
        'nurse_rating',
        'house_keeping',
        'treatment_rating',
        'any_other'
    ];
}
