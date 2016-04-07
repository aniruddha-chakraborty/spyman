<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('nid')->unique();
            $table->string('father_name');
            $table->string('father_id');
            $table->string('mother_name');
            $table->string('mother_id');
            $table->string('f_h');
            $table->tinyInteger('type');
            $table->tinyInteger('gender');
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        
        Schema::drop('people');
    }
}
