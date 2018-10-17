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
            $table->increments('id', 10);
            $table->string('name', 100)->nullable();
            $table->integer('id_type', 10)->references('id')->on('type_products');
            $table->text('description')->nullable();
            $table->float('unit_price')->nullable();
            $table->float('promotion_price')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('unit', 255)->nullable();
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
