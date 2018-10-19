<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customercode')->nullable();

            $table->unsignedinteger('bill_id')->nullable();
            $table->foreign('bill_id')->references('id')->on('bills');

            $table->unsignedinteger('plan_id')->nullable();
            $table->foreign('plan_id')->references('id')->on('plans');

            $table->unsignedinteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('employeds');


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
