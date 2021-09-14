<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalPatientDetails extends Model
{
    use HasFactory;
    public $fillable = [
        'first_name',
        'last_name',
        'age',
        'patient_id',
        'email',
        'phone_number',
        'date_of_birth',
        'disease',
        'blood_group',
        'profession',
        'maritual_status',
        'address',
        'division_id',
        'doctor_id'
    ];
}
