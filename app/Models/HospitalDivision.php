<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalDivision extends Model
{
    use HasFactory;
    public $fillable = [
        'division_name'

    ];
}
