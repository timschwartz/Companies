<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timschwartz_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('number');
            $table->string('ext');
            $table->boolean('sms');
            $table->boolean('mms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('timschwartz_phones');
    }
}

