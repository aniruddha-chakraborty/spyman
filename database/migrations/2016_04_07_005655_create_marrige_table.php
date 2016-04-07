<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarrigeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marrige', function (Blueprint $table) {
        
            $table->increments('id')->unique();
            $table->string('people_1_name');
            $table->string('people_2_name');
            $table->string('people_1_nid');
            $table->string('people_2_nid');
            $table->tinyInteger('people_1_gender');
            $table->tinyInteger('people_2_gender');
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
        Schema::drop('marrige');
    }
}
