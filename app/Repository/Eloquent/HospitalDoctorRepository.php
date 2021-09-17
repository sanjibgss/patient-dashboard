<?php

namespace App\Repository\Eloquent;


//use App\Models\Patient as ModelsPatient;
//use App\Repository\PatientRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\HospitalDoctor;
use App\Models\HospitalDivision;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class HospitalDoctorRepository
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




    public function getHospitalDoctorData()

    {
        $colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');
        $division= HospitalDivision::select('id','division_name')->get();
        foreach($division as $div){
            $rand=rand(0,9);
            $doccount=HospitalDivision::
            join('hospital_doctors','hospital_doctors.id',"=",'hospital_divisions.id')
            ->where('division_id',"=",$div['id'])->count();

            $output[] = array(
                $div['division_name'],
                $doccount,
                $doccount,
                $colors[$rand]
                // $doctorscount,
                //$doctorscount,
                 // $colors[$i]
        );
    }
        return  $data =json_encode($output);




            //echo "<pre>";print_r($dates);




    }


}
