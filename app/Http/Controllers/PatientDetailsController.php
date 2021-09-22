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
      
        $this->repository = $repository;
    }

 public function createPatientForm(Request $request) {
    return view('patientdetailsindex');
  }

  
  public function PatientForm(Request $request) {

      
      $this->validate($request, [
          'first_name' => 'required|max:500',
          'last_name' => 'required|max:500',
          'email' => 'required|email|unique:patient_details',
          
          'contact_phone' => 'required|numeric|min:10',
          'blood_group'=>'required|max:5',
          'disease' => 'required|max:700',
          'address' => 'required'

       ]);

      
      PatientDetail::create($request->all());
      return back()->with('success', 'Your patient Details form has been submitted.');
  }
  public function details()
  {
    $pat = $this->repository->details();
    return $pat;
    

}


}
