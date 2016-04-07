<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRajukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('rajuk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nid');
            $table->longText('data');
            $table->longText('address');
            $table->integer('price');
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

        Schema::drop('rajuk');
    
    }
}
