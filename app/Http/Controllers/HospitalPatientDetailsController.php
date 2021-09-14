<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HospitalPatientDetails;
use App\Repository\Eloquent\HospitalPatientDetailsRepository;
use App\Repository\Eloquent\HospitalPatientRepository;
use Illuminate\Support\Facades\DB;



class HospitalPatientDetailsController extends Controller
{
    private $repository;
    public function __construct(HospitalPatientRepository $repository)
    {
        //parent::__construct();
        $this->repository = $repository;
    }



      public function getHospitalPatientData()

    {
        $chartData = $this->repository->getHospitalPatientData();

        return view('hospital.divisionpatientchart')->with('data', $chartData);


      }






}
