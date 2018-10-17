<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->date('date_order');
            $table->double('total');
            $table->string('payment', 200);
            $table->string('note', 500);
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
        Schema::drop('bills');
    }
}
