<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type_products');
            $table->text('description');
            $table->float('unit_price');
            $table->float('promotion_price');
            $table->string('image', 255);
            $table->string('unit', 255);
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
        Schema::drop('products');
    }
}
