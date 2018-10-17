<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBillDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_bill')->unsigned();
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quanlity')->unsigned();
            $table->double('unit_price');
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
        Schema::drop('bill_details');
    }
}
