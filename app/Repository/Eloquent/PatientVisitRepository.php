<?php

namespace App\Repository\Eloquent;


//use App\Models\Patient as ModelsPatient;
//use App\Repository\PatientRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\PatientVisit;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PatientVisitRepository
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




     /*public function getChartData()

    {
        $firstday = date('Y-m-d', strtotime("now"));
        $firstday = date('Y-m-d', strtotime('-6 day', strtotime($firstday)));
        $colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32');
        for ($i=0; $i<=6; $i++){
            $day= date('l', strtotime($firstday));

            // $dates[$i]['day']=$day;
            // $dates[$i]['date']=$firstday;
            //$patientcount=PatientVisit::whereDate('from_time', '=', $firstday)->count();
            //$patientcount=DB::table('patient_visits')->whereDate('from_time', '=', $firstday)->count();
            $firstday= date('Y-m-d', strtotime('+1 day', strtotime($firstday)));
            $patientcount=PatientVisit::whereDate('from_time', '=', $firstday)->count();
            $output[] = array(
                $day,
                $patientcount,
                $patientcount,
                $colors[$i]



               );
            }
             return  $data =json_encode($output);

        //}
            //echo "<pre>";print_r($dates);




    }*/
    public function getChartData()

    {
        $startday = date_create('2021-08-18');
        $endday = date_create('2021-08-24');
        $daysdiff = date_diff($startday, $endday);
        $dayscount=$daysdiff->format('%d');
        $lastdate = date('Y-m-d', strtotime("2021-08-24"));
        $firstdate = date('Y-m-d', strtotime("2021-08-18", strtotime($lastdate)));
        $colors=array('#ff0000','#ffc0cb','#2e8b57','#6a5acd','#008080','#ffff00','#9acd32','#6a5acd','#008080','#2e8b57');
        for ($i=0; $i<=$dayscount; $i++){
            $day= date('l', strtotime($firstdate));

            // $dates[$i]['day']=$day;
            // $dates[$i]['date']=$firstday;
            $patientcount=PatientVisit::whereDate('from_time', '=', $firstdate)->count();
            //$patientcount=DB::table('patient_visits')->whereDate('from_time', '=', $firstday)->count();
            $firstdate= date('Y-m-d', strtotime('+1 day', strtotime($firstdate)));
            $output[] = array(
                $day,
                $patientcount,
                $patientcount,
                $colors[$i]



               );
            }
             return  $data =json_encode($output);

        //}
            //echo "<pre>";print_r($dates);




    }
     /* public function getChartData()

    {
        $firstday = date('Y-m-d', strtotime("this week"));

        $colors=array('red','green','blue','orange','yellow','pink','grey');
        for ($i=0; $i<=6; $i++){
            $day= date('l', strtotime($firstday));
            // $dates[$i]['day']=$day;
            // $dates[$i]['date']=$firstday;
            $patientcount=PatientVisit::whereDate('from_time', '=', $firstday)->count();
            //$patientcount=DB::table('patient_visits')->whereDate('from_time', '=', $firstday)->count();
            $firstday= date('Y-m-d', strtotime('+1 day', strtotime($firstday)));
            $output[] = array(
                $day,
                $patientcount,
                $patientcount,
                $colors[$i]



               );
            }
             return  $data =json_encode($output);

        //}
            //echo "<pre>";print_r($dates);




      }*/
}
