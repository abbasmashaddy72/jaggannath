<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'phone',
        'age',
        'address',
        'previous_record',
        'previous_record_description',
        'appointment_date',
        'appointment_time',
    ];
}
