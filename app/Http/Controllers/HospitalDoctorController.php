<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HospitalDoctor;
use App\Repository\Eloquent\HospitalDoctorRepository;
use Illuminate\Support\Facades\DB;



class HospitalDoctorController extends Controller
{
    private $repository;
    public function __construct(HospitalDoctorRepository $repository)
    {
        
        $this->repository = $repository;
    }



      public function getHospitalDoctorData()

    {
        $chartData = $this->repository->getHospitalDoctorData();

        return view('hospital.divisiondoctorchart')->with('data', $chartData);


      }


    }       
