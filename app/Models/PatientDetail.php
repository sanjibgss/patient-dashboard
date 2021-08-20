<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    use HasFactory;
    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_phone',
        'blood_group',
        'disease',
        'address'

    ];
}
