<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->integer('doctor_age');
            $table->bigInteger('phone_number');
            $table->string('qualification');
            $table->date('date_of_birth');
            $table->string('email');
            $table->integer('division_id');
            $table->string('status');
            $table->longText('address');
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
        Schema::dropIfExists('hospital_doctors');
    }
}
