<?php

namespace App\Repository\Eloquent;


//use App\Models\Patient as ModelsPatient;
//use App\Repository\PatientRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PatientRepository
{

  
   public function all(): Collection
   {
       return $this->model->all();
   }
}