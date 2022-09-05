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
        Schema::create('basic_information', function (Blueprint $table) {
            $table->id();
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('religion');
            $table->string('maritalStatus');
            $table->string('bloodGroup');
            $table->bigInteger('telephoneNo');
            $table->string('birthDate');
            $table->string('temporaryAddrees');
            $table->string('parmanentAddress');
            $table->bigInteger('nid');
            $table->string('passport');
            $table->string('insuranceNo');            
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
        Schema::dropIfExists('basic_information');
    }
};
