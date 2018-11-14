<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('price');

            $table->string('total_fees');

            $table->unsignedInteger('months_id');
            $table->foreign('months_id')->references('id')->on('months')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('plans_id');
            $table->foreign('plans_id')->references('id')->on('plans')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('current_fees');
            $table->string('barcode');
            $table->unsignedInteger('customers_id');
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');

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
