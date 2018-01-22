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
            $table->increments('id');
            $table->integer('oid')->unsigned()->nullable();
            $table->string('business_name',50)->nullable();
            $table->string('business_description',2000)->nullable();
            $table->string('business_tagline',100)->nullable();
            $table->string('business_slug',20)->nullable()->unique();
            $table->string('business_country',50)->nullable();
            $table->string('business_region',20)->nullable();
            $table->string('business_area',20)->nullable();
            $table->string('business_address',50)->nullable();
            $table->enum('business_days',['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'])->nullable();
            $table->string('business_open',2)->nullable();
            $table->string('business_close',2)->nullable();
            $table->string('business_email',50)->nullable()->unique();
            $table->string('business_number',10)->nullable();
            $table->string('business_number_2',10)->nullable();
            $table->string('business_category',2)->nullable();
            $table->string('business_images',30)->nullable();
            $table->foreign('oid')->references('id')->on('BUSINESS_OWNERS');
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
