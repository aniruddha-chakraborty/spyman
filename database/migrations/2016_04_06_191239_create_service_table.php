<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('service', function (Blueprint $table) {
        
            $table->increments('id')->unique();
            $table->string('full_name');
            $table->string('nid');
            $table->integer('salary');
            $table->string('job_info');
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
        Schema::drop('service');
    }
}
