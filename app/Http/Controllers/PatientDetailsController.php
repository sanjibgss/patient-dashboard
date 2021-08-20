<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PatientDetail;
use App\Repository\Eloquent\PatientDetailsRepository;
use Illuminate\Support\Facades\DB;



class PatientDetailsController extends Controller
{
    private $repository;
    public function __construct(PatientDetailsRepository $repository)
    {
        //parent::__construct();
        $this->repository = $repository;
    }
// Create Form*/
 public function createPatientForm(Request $request) {
    return view('patientdetailsindex');
  }

  // Store Form data in database
  public function PatientForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'first_name' => 'required|max:500',
          'last_name' => 'required|max:500',
          'email' => 'required|email|unique:patient_details',
          //'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'contact_phone' => 'required|numeric|min:10',
          'blood_group'=>'required|max:5',
          'disease' => 'required|max:700',
          'address' => 'required'

       ]);

      //  Store data in database
      PatientDetail::create($request->all());
      return back()->with('success', 'Your patient Details form has been submitted.');
  }
  public function details()
  {
    $pat = $this->repository->details();
    return $pat;
    //$form=Form::where('id',$id);
    //$form->first(1);


}
/*public function queriess()
    {
        $this->repository->queriess();
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
      $data=array('2021-08-09','2021-08-10','2021-08-11');
      $da=DB::select('select count(id) from patients where DATE(from_time)=2021-08-10 ');
      return $da;
      //foreach ($da as $d)
      //{
          //return $d;

        //}
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
    }*/


}
