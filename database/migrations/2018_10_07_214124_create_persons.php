<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id',6);
            $table->string('name',40);
            $table->string('lastname',40);
            $table->string('dni',8);
            $table->date('birth');
            $table->string('adress',40);

            $table->string('sex')->nullable();
            $table->string('civil_state')->nullable();
            

            $table->unsignedInteger('nationality_id')->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities');

            $table->unsignedInteger('employed_id')->nullable();
            $table->foreign('employed_id')->references('id')->on('employeds');
            
            $table->unsignedInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');

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
        //
    }
}
