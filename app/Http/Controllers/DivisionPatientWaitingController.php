<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HospitalDoctor;
use App\Repository\Eloquent\DivisionPatientWaitingRepository;
use Illuminate\Support\Facades\DB;



class DivisionPatientWaitingController extends Controller
{
    private $repository;
    public function __construct(DivisionPatientWaitingRepository $repository)
    {
        //parent::__construct();
        $this->repository = $repository;
    }



      public function getPatientWaitingData()

    {
        $chartData = $this->repository->getPatientWaitingData();

        return view('hospital.divisionpatientwaiting')->with('data', $chartData);


      }






}
