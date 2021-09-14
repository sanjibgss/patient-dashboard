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
  /* public function queries()
   {
       $pa=DB::select('select * from patients');
       return $pa;
       //$pa=Patient::select('id',$id);
       //return $pa->find($id);
       //$pa->all();
       //$pa=DB::select('select blood_group,patient_name from patients');
       //return $pa;
       //$pa=DB::select('select * from patients');
       //return $pa;
       //$pa = DB::table('patitens')->get();
       //foreach ($pa as $pat) {
           //echo $pat->patient_name;
        //}
    }*/
    public function visitdetails()
    {
        //$pa=Patient::select('id',$id)->all();
        //return $pa;
        //$pa->all();
        $pa=DB::select('select date(from_time) from patient_visits');
        //$pa=DB::select('select from_time DATEDIFF(2021-08-17,2021-08-10)  from patient_visits');
       // $pa=DB::select(select * from patients_visit WHERE (date_field BETWEEN '2010-09-29 10:15:55' AND '2010-01-30 14:15:55'), [1])
        return $pa;
        //$pa=DB::select('select * from patients');
        //return $pa;
        //$pa = DB::table('patitens')->get();
        //foreach ($pa as $pat) {
            //echo $pat->patient_name;
         //}
     }
     public function fromdate()
    {
        //$pa=Patient::select('id',$id)->all();
        //return $pa;
        //$pa->all();
        //$pa=DB::select('select date(from_time) from patient_visits');
        $pa=DB::select('select to_time from patient_visits where month(from_time) between 08 and 08n ');
        //$pa=DB::select('select from_time DATEDIFF(2021-08-17,2021-08-10)  from patient_visits');
       // $pa=DB::select(select * from patients_visit WHERE (date_field BETWEEN '2010-09-29 10:15:55' AND '2010-01-30 14:15:55'), [1])
        return $pa;
        //$pa=DB::select('select * from patients');
        //return $pa;
        //$pa = DB::table('patitens')->get();
        //foreach ($pa as $pat) {
            //echo $pat->patient_name;
         //}
     }
     public function fdc()
     {
        //$date1 = "2021-08-10";
        //$date2 = "2021-08-16";
        //$diff = strtotime($date2) - strtotime($date1);
        //return $diff;
        $origin = date_create('2009-10-11');
        $target = date_create('2009-10-13');
        $interval = date_diff($origin, $target);
        echo $interval->format('%d');
        //$first_date = new DateTime("2012-11-30 17:03:30");
        //$second_date = new DateTime("2012-12-21 00:00:00");
        //$difference = $origin->diff($target);
        //echo $difference;
        //echo (type) $interval;

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
