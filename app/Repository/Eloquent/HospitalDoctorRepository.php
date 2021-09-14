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


        $getDivision= HospitalDivision::select('id','division_name')->get();
        foreach($getDivision as $division){
            $rand= rand(0,9);
            $getDoctors = HospitalDoctor::where('division_id',"=", $division['id'])->count();
            $output[] = array(
                $division['division_name'],
                $getDoctors, $getDoctors,

                $colors[$rand]



               );

           // echo  "<pre>"; print_r($division['id']); exit;

        }
        return  $data =json_encode($output);
      //  echo  "<pre>"; print_r($getDivision); exit;

        // for ($i=0; $i<=4; $i++){
        //     //$divisions=array('cardiology','neurology','oncology','prdiatrics','surgery');

        //     $divisionnames=HospitalDivision::pluck('division_name');
        //     //$doctorscount=HospitalDoctor::where('doctor_name','=','$divisionnames')->count();
        //     //$doctorscount=HospitalDivision::join('hospital_doctors','hospital_divisions.id', "=", 'hospital_doctors.division_id')->select('hospital_doctors.doctor_name','hospital_divisions.division_name')->count();
        //     $doctorscount=HospitalDivision::join('hospital_doctors','hospital_doctors.division_id',"=",'hospital_divisions.id')
        //     ->where('hospital_doctors.doctor_name',"=",'hospital_divisions.division_name')->count();
        //     $output[] = array(
        //         $divisionnames,
        //         $doctorscount,
        //         $doctorscount,
        //         $colors[$i]
        //     );
            return  $data =json_encode($output);



       // }
            //echo "<pre>";print_r($dates);




    }
    public function gdf()

    {
        //$colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');

        for ($i=0; $i<=4; $i++){
            //$divisions=array('cardiology','neurology','oncology','prdiatrics','surgery');

            $divisionnames=HospitalDivision::pluck('division_name');
            //$doctorscount=HospitalDoctor::where('doctor_name','=','$divisionnames')->count();
            //$doctorscount=HospitalDivision::join('hospital_doctors','hospital_divisions.id', "=", 'hospital_doctors.division_id')->select('hospital_doctors.doctor_name','hospital_divisions.division_name')->count();
            //$doctorscount=HospitalDivision::join('hospital_doctors','hospital_doctors.division_id',"=",'hospital_divisions.id')
            //->wherecolumn('hospital_doctors.doctor_name',"=",'hospital_divisions.division_name')->count();
            $output[] = array(
                $divisionnames,
               // $doctorscount,
                //$doctorscount,
               // $colors[$i]
            );
            return  $data =json_encode($output);



        }
            //echo "<pre>";print_r($dates);




    }

    public function Da()

    {

        $doctorscount=HospitalDoctor::select('doctor_name')->count();
        return $doctorscount;





    }

}
