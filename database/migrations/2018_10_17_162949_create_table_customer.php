<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id', 10);
            $table->string('name', 100)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('email', 50)->nullable()->unique();
            $table->string('password',255);
            $table->string('address', 100)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('note', 200)->nullable();
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
        Schema::drop('customer');
    }
}
