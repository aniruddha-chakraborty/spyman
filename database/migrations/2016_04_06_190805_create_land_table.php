<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('full_name');
            $table->string('nid')->unique();
            $table->longText('land_info');
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
    
        Schema::drop('land');
    
    }
}
