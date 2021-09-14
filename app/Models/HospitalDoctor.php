<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalDoctor extends Model
{
    use HasFactory;
    public $fillable = [
        'doctor_name',
        'doctor_age',
        'qualification',
        'date_of_birth',
        'email',
        'division_id',
        'status',
        'address'
    ];
}
