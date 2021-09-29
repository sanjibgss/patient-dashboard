<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionPatientWaitingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_patient_waitings', function (Blueprint $table) {
            $table->id();
            $table->integer('division_id');
            $table->integer('doctor_id');
            $table->integer('patient_id');
            $table->dateTime('from_time');
            $table->dateTime('out_time');
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
        Schema::dropIfExists('division_patient_waitings');
    }
}
