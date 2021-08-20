<?php

namespace App\Repository\Eloquent;


//use App\Models\Patient as ModelsPatient;
//use App\Repository\PatientRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PatientRepository
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   /*public function __construct(ModelsPatient $model)
   {
       parent::__construct($model);
   }*/

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();
   }
   public function queries()
   {
       $pa=DB::select('select * from patients');
       return $pa;
       //$pa=Patient::select('id',$id);
       //return $pa->find($id);
       //$pa->all();
       //$pa=DB::select('select blood_group,patient_name from patients');
       //return $pa;
       //$pa=DB::select('select * from patients');
       //return $pa;
       //$pa = DB::table('patitens')->get();
       //foreach ($pa as $pat) {
           //echo $pat->patient_name;
        //}
    }
    public function queriess()
    {
        //$pa=Patient::select('id',$id)->all();
        //return $pa;
        //$pa->all();
        $pa=DB::select('select blood_group,patient_name from patients');
        return $pa;
        //$pa=DB::select('select * from patients');
        //return $pa;
        //$pa = DB::table('patitens')->get();
        //foreach ($pa as $pat) {
            //echo $pat->patient_name;
         //}
     }
}
