<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses_temp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_owner_last_name');
            $table->string('business_owner_given_names');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('id_type');
            $table->string('id_number');
            $table->string('phone_number');
            $table->string('phone_number_2');
            $table->string('country');
            $table->string('region');
            $table->string('area');
            $table->string('address');
            $table->string('business_name');
            $table->string('business_slug');
            $table->string('business_number');
            $table->string('business_number_2');
            $table->string('delivery_services');
            $table->string('industry');
            $table->unique('email');
            $table->string('password');
            $table->string('business_logo');
            $table->string('cover_image_1');
            $table->string('cover_image_2');
            $table->string('cover_image_3');
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
        Schema::dropIfExists('businesses_temp');
    }
}
