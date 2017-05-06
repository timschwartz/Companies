<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timschwartz_company_phone', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('company_id');
            $table->integer('phone_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('timschwartz_company_phone');
    }
}

