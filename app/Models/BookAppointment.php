<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'appointment_date',
        'appointment_time',
        'phone',
        'email',
        'gender',
        'age',
        'address',
        'team_id',
        'previous_record',
        'previous_record_description'
    ];
}
