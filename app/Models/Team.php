<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'image',
        'qualification',
        'profile',
        'experience'
    ];

    protected $casts = [
        'experience' => 'date:Y-m-d'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
