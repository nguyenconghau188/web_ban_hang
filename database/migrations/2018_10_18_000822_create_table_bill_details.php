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
            $table->increments('id', 10);
            $table->integer('id_bill', 10)->references('id')->on('bills');
            $table->integer('id_product', 10)->references('id')->on('products');
            $table->integer('quanlity', 11)->nullable();
            $table->double('unit_price')->nullable();
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
