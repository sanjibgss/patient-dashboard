<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientWaiting extends Model
{
    use HasFactory;
    public $fillable = [
        'patient_id',
        'patient_name',
        'disease',
        'blood_group',
        'waiting_time'
    ];
}
