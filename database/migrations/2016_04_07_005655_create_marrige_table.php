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
            $table->string('full_name_male');
            $table->string('full_name_female');
            $table->string('male_nid');
            $table->string('female_nid');
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
