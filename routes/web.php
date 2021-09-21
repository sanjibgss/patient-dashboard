<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FormValidtionController;
use App\Http\Controllers\PatientDetailsController;
use App\Http\Controllers\PatientVisitsController;
use App\Http\Controllers\HospitalDoctorController;
use App\Http\Controllers\HospitalPatientDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/patient', [FormValidtionController::class, 'createUserForm']);
Route::post('/patient', [FormValidtionController::class, 'UserForm'])->name('validate.form');
Route::get('/patient/{id}', [FormValidtionController::class, 'dataoperations']);
Route::get('/data', [FormValidtionController::class, 'dataoperationd']);
Route::get('/datas', [FormValidtionController::class, 'queriess']);
Route::get('/datall', [FormValidtionController::class, 'queries']);
Route::get('/dataf', [FormValidtionController::class, 'dataoperationf']);



Route::get('/patientdetails', [PatientDetailsController::class, 'createPatientForm'])->name('patient-detail');
Route::post('/patientdetails', [PatientDetailsController::class, 'PatientForm'])->name('validate.patientdetails');
Route::get('/detailsrepo', [PatientDetailsController::class, 'details']);





Route::get('/patientvisits', [PatientVisitsController::class, 'createPatientVisitForm'])->name('patient-visit');
Route::post('/patientvisits', [PatientVisitsController::class, 'PatientVisitForm'])->name('validate.patientvisits');
Route::get('/visitrepo', [PatientVisitsController::class, 'visitdetails']);
Route::get('/daterepo', [PatientVisitsController::class, 'fromdate']);





Route::get('/', function (Request $request) {
    return view('index');
});






Route::get('/chart', function (Request $request) {
    // ...
    return view('patientbarchart');
});

Route::get('/charts', [PatientVisitsController::class, 'getChartData'])->name('charts');




Route::get('/patientschart', [HospitalPatientDetailsController::class, 'getHospitalPatientData'])->name('patientschart');


Route::get('/doctorschart', [HospitalDoctorController::class, 'getHospitalDoctorData'])->name('doctorschart');



