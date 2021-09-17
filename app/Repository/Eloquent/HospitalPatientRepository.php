<?php

namespace App\Repository\Eloquent;


//use App\Models\Patient as ModelsPatient;
//use App\Repository\PatientRepositoryInterface;
use Illuminate\Http\Request;

use App\Models\HospitalDivision;
use App\Models\HospitalPatientDetails;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class HospitalPatientRepository
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   /*public function __construct(ModelsPatient $model)
   {
       parent::__construct($model);
   }*/

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();
   }




    public function getHospitalPatientData()

    {
        $colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');


        $getDivision= HospitalDivision::select('id','division_name')->get();
        foreach($getDivision as $division){
            $rand= rand(0,9);
            $getPatients = HospitalDivision::join('hospital_patient_details','hospital_patient_details.id',"=",'hospital_divisions.id')
            ->where('division_id',"=",$division['id'])->count();
            $output[] = array(
                $division['division_name'],
                $getPatients,
                $getPatients,
                $colors[$rand]



               );

           // echo  "<pre>"; print_r($division['id']); exit;

        }
        return  $data =json_encode($output);



    }



}
