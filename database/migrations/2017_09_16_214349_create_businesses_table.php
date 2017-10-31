<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_owner_last_name');
            $table->string('business_owner_given_names');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('id_type');
            $table->string('id_number');
            $table->string('phone_number');
            $table->string('phone_number_2');
            $table->string('business_name');
            $table->string('country');
            $table->string('region');
            $table->string('area');
            $table->string('address');
            $table->string('business_number');
            $table->string('business_number_2');
            $table->string('delivery_services');
            $table->string('industry');
            $table->string('email');
            $table->unique('email');
            $table->string('password');
            $table->binary('profile_picture');
            $table->binary('id_picture');
            $table->binary('business_logo');
            $table->binary('cover_image_1');
            $table->binary('cover_image_2');
            $table->binary('cover_image_3');
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
        Schema::dropIfExists('businesses');
    }
}
