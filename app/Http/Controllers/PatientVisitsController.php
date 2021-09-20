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

 public function getChartData()

    {
        $chartData = $this->repository->getChartData();

        return view('patientchart')->with('dates', $chartData);


      }




}
