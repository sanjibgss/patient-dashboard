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
        
        $this->repository = $repository;
    }

public function createUserForm(Request $request) {
    return view('form');
  }

 
  public function UserForm(Request $request) {

      
      $this->validate($request, [
          'patient_name' => 'required|max:500',
          'email' => 'required|email|unique:patients',
          
          'phone' => 'required|numeric|min:10',
          'blood_group'=>'required|max:5',
          'address' => 'required',
          'from_time' => 'required',
          'to_time' => 'required'
       ]);

      
      Patient::create($request->all());
      return back()->with('success', 'Your patient Details form has been submitted.');
  }
}
