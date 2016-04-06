<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteTableComplain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain', function (Blueprint $table) {
            $table->increments('id');
            $table->string('complainer_name');
            $table->string('complainer_mobile', 15);
            $table->string('token_id');
            $table->string('vat_reg_id');
            $table->string('institute_name');
            $table->string('address');
            $table->string('complain');
            $table->enum('complain_type', ['general', 'vat']);
            $table->enum('status', ['processing', 'completed', 'incomplete']);
            $table->date('completed_date');
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
        Schema::drop('complain');
    }
}
