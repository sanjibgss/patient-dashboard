<?php

namespace App\Repository\Eloquent;



use Illuminate\Http\Request;
use App\Models\PatientVisit;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PatientVisitRepository
{

   
   public function all(): Collection
   {
       return $this->model->all();
   }
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
            $patientcount=PatientVisit::whereDate('from_time', '=', $firstdate)->count();
            $firstdate= date('Y-m-d', strtotime('+1 day', strtotime($firstdate)));
            $output[] = array(
                $day,
                $patientcount,
                $patientcount,
                $colors[$i]



               );
            }
             return  $data =json_encode($output);

       
            




    }
}
