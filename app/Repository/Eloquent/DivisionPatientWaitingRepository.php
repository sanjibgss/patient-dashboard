<?php

namespace App\Repository\Eloquent;



use App\Models\HospitalDoctor;
use App\Models\HospitalPatientDetails;
use App\Models\DivisionPatientWaiting;
use App\Models\HospitalDivision;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class DivisionPatientWaitingRepository
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




    public function getPatientWaitingData()

    {
        $colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');
        $division= HospitalDivision::select('id','division_name')->get();
        foreach($division as $div){
            $rand=rand(0,9);
            $doctorfromtime=date_create('2021-09-28 10:30:00');
            $doctortotime=date_create('2021-09-28 16:00:00');
            $interval=date_diff($doctorfromtime,$doctortotime);
            $hours=$interval->format('%h');
            $minutes=$interval->format('%i');
            $tim=$hours*60+$minutes*1;
            //$doccount=HospitalDivision::
            //join('hospital_doctors','hospital_doctors.id',"=",'hospital_divisions.id')
            //->where('division_id',"=",$div['id'])->count();
            $getpa = HospitalPatientDetails::where('division_id',"=", $div['id'])->count();
            $waitinterval=$tim/$getpa;

            $output[] = array(
                $div['division_name'],
                $waitinterval,
                $waitinterval,
                $colors[$rand]
            );
        }
        /*$colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');
        $division= HospitalDivision::select('id','division_name')->get();
        foreach($division as $div){
            $rand=rand(0,9);
            $doctorfromtime=date_create('2021-09-28 10:30:00');
            $doctortotime=date_create('2021-09-28 16:00:00');
            $interval=date_diff($doctorfromtime,$doctortotime);
            $hours=$interval->format('%h');
            $minutes=$interval->format('%i');
            $tim=$hours*60+$minutes*1;
            $doccount=HospitalDivision::
            join('hospital_doctors','hospital_doctors.id',"=",'hospital_divisions.id')
            ->where('division_id',"=",$div['id'])->count();

            $output[] = array(
                $div['division_name'],
                $doccount,
                $doccount,
                $colors[$rand]
            );
        }*/
        return  $data =json_encode($output);









    }
    public function gcd()

    {
        $colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');
        $division= HospitalDivision::select('id','division_name')->get();
        foreach($division as $div){
            $rand=rand(0,9);
            $doctorfromtime=date_create('2021-09-28 10:30:00');
            $doctortotime=date_create('2021-09-28 16:00:00');
            $interval=date_diff($doctorfromtime,$doctortotime);
            $hours=$interval->format('%h');
            $minutes=$interval->format('%i');
            $tim=$hours*60+$minutes*1;
            $doccount=HospitalDivision::
            join('hospital_doctors','hospital_doctors.id',"=",'hospital_divisions.id')
            ->where('division_id',"=",$div['id'])->count();
            $waitinterval=$doccount/$tim;

            $output[] = array(
                $div['division_name'],
                $waitinterval,
                $waitinterval,
                $colors[$rand]
            );
        }
        return  $data =json_encode($output);









    }



}
