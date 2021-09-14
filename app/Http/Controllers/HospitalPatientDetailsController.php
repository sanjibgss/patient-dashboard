<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HospitalDoctor;
use App\Repository\Eloquent\HospitalDoctorRepository;
use Illuminate\Support\Facades\DB;



class HospitalPatientDetailsController extends Controller
{
    private $repository;
    public function __construct(HospitalDoctorRepository $repository)
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
