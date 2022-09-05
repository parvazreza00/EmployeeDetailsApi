<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_information', function (Blueprint $table) {
            $table->id();
            $table->string('jobType');
            $table->string('designation');
            $table->bigInteger('salary');
            $table->string('registrationDate');
            $table->string('joinDate');
            $table->string('resignDate');
            $table->string('confirmationDate');
            $table->string('salaryIncrementDate');
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
        Schema::dropIfExists('job_information');
    }
};
