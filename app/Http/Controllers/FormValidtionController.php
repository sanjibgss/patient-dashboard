<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Repository\Eloquent\PatientRepository;
use Illuminate\Support\Facades\DB;



class FormValidtionController extends Controller 
{
    private $repository;
    public function __construct(PatientRepository $repository)
    {
        //parent::__construct();
        $this->repository = $repository;
    }
// Create Form
public function createUserForm(Request $request) {
    return view('form');
  }

  // Store Form data in database
  public function UserForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'patient_name' => 'required|max:500',
          'email' => 'required|email|unique:patients',
          //'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'phone' => 'required|numeric|min:10',
          'blood_group'=>'required|max:5',
          'address' => 'required',
          'from_time' => 'required',
          'to_time' => 'required'
       ]);

      //  Store data in database
      Patient::create($request->all());
      return back()->with('success', 'Your patient Details form has been submitted.');
  }
  public function sql()
  {
    $patient = $this->PatientRepository->all();
    //$form=Form::where('id',$id);
    //$form->first(1);


}
  public function queriess()
    {
       $da= $this->repository->queriess();
       return $da;
    }
  public function queries()
  {
      $a= $this->repository->queries();
      return $a;
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
    }


}
