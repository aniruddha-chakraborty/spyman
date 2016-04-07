<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrtaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('brta', function (Blueprint $table) {
        
            $table->increments('id')->unique();
            $table->string('full_name');
            $table->string('nid');
            $table->string('car_model');
            $table->string('car_price');
            $table->integer('price');
            $table->integer('tax');
            $table->integer('tax_percent');
            $table->longText('address');
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
        Schema::drop('brta');
    }
}
