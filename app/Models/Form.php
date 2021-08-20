<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = [
        'patient_name',
        'email',
        'phone',
        'blood_group',
        'address',
        'in_time',
        'out_time'
    ];

}
