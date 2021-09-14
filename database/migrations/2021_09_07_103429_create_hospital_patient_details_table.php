
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalPatientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_patient_details', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('patient_age');
            $table->integer('patient_id');
            $table->string('email');
            $table->integer('phone_number');
            $table->date('date_of_birth');
            $table->string('disease');
            $table->string('blood_group');
            $table->string('profession');
            $table->string('maritual_status');
            $table->longText('address');
            $table->integer('division_id');
            $table->integer('doctor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_patient_details');
    }
}
