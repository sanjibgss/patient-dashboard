<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PatientVisit;
use App\Repository\Eloquent\PatientVisitRepository;
use Illuminate\Support\Facades\DB;



class PatientVisitsController extends Controller
{
    private $repository;
    public function __construct(PatientVisitRepository $repository)
    {
        //parent::__construct();
        $this->repository = $repository;
    }
// Create Form
 public function createPatientVisitForm(Request $request) {
    return view('patientvisitindex');
  }

  // Store Form data in database
  public function PatientVisitForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'patient_id' => 'required',
          'from_time' => 'required',
          'to_time' => 'required'

       ]);

      //  Store data in database
      PatientVisit::create($request->all());
      return back()->with('success', 'Your patient Visiting Details form has been submitted.');
  }
  public function visitdetails()
  {
    $pa = $this->repository->visitdetails();
    return $pa;
    //$form=Form::where('id',$id);
    //$form->first(1);


}
  public function fromdate()
  {
      $pa = $this->repository->fromdate();
      return $pa;
      //$form=Form::where('id',$id);
      //$form->first(1);


}

  public function dataoperation()
  {
      //$this->dataoperation()=dataoperation();



}

  public function dataoperations($id)
  {
      //$form=Form::where('id',$id);
      //$form->first(1);


  }
  public function dataoperationf()
  {



    }
  public function dataoperationd()
  {
      $pa=DB::select('select blood_group,patient_name from patients');
      //return view('form',['patients'=>$patients]);

      return $pa;
      //$form=DB::select('select * from forms');

      //return $form->first();
      //echo '---------------------------------------';
      $pa = DB::table('patitens')->get();
      foreach ($pa as $pat) {
          echo $pat->patient_name;
        }
    }
    /*public function getChartData()

    {
        $firstday = date('Y-m-d', strtotime("this week"));


        for ($i=0; $i<=6; $i++){
            $day= date('l', strtotime($firstday));
            // $dates[$i]['day']=$day;
            // $dates[$i]['date']=$firstday;
            $patientcount=DB::table('patient_visits')->whereDate('from_time', '=', $firstday)->count();
            $firstday= date('Y-m-d', strtotime('+1 day', strtotime($firstday)));
            $output[] = array(
                $day,
                $patientcount



               );
            }
               $data =json_encode($output);

        //}
            //echo "<pre>";print_r($dates);
            return view('patientbarchart')->with('dates', $data);



      }*/
      public function getChartData()

    {
        $chartData = $this->repository->getChartData();

        return view('patientchart')->with('dates', $chartData);


      }
      public function fcd()

      {
        $ch = $this->repository->fdc();
        return $ch;

        //return view('patientchart')->with('dates', $chartData);
          $from = date('2021-08-10');
          $to = date('2021-08-15');
         // $patient=PatientVisit::whereDate('from_time', [$from, $to])->get();
          //return $patient;
          //print_r('-------------------------------------------------------');
          //$firstday = date('Y-m-d', strtotime($patient));
          //$day = date('l',strtotime($firstday));
          //return $day;
         // $patientcount=PatientVisit::whereBetween('from_time', [$from, $to])->get()->count();
          //return $patientcount;



        }



}
