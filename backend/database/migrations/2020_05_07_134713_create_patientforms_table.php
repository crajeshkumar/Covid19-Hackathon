<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientforms', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->integer('age');
            $table->enum('gender', array('male', 'female','transgender'));
            $table->string('symptoms');
            $table->integer('symptomsdays');
            $table->string('brief');
            $table->string('address');
            $table->bigInteger('number');
            $table->string('city',20);
            $table->string('state',10);
            $table->integer('pincode');
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
        Schema::dropIfExists('patientforms');
    }
}
