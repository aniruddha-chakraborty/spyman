<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
        
            $table->increments('id')->unique();
            $table->string('full_name');
            $table->string('nid');
            $table->string('business_name');
            $table->string('business_type');
            $table->integer('trade_licence');
            $table->date('trade_licence_date');
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
        Schema::drop('business');
    }
}
