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
        Schema::create('BUSINESSES', function (Blueprint $table) {
            $table->integer('id')->unsigned()->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_slug')->nullable();
            $table->string('business_country')->nullable();
            $table->string('business_region')->nullable();
            $table->string('business_area')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_number')->nullable();
            $table->string('business_number_2')->nullable();
            $table->string('business_industry')->nullable();
            $table->string('business_images')->nullable();
            $table->foreign('id')->references('id')->on('BUSINESS_OWNERS');
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
        Schema::dropIfExists('BUSINESSES');
    }
}
