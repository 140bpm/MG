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

            $table->unsignedinteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('employeds')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedinteger('data_customer_id')->nullable();
            $table->foreign('data_customer_id')->references('id')->on('persons')->onDelete('cascade')->onUpdate('cascade');


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
