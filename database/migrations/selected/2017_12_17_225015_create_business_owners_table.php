<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BUSINESS_OWNERS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_owner_last_name')->nullable();
            $table->string('business_owner_given_names')->nullable();
            $table->string('business_owner_dob')->nullable();
            $table->string('business_owner_nationality')->nullable();
            $table->string('business_owner_id_type')->nullable();
            $table->string('business_owner_id_number')->nullable();
            $table->string('business_owner_phone')->nullable();
            $table->string('business_owner_phone_2')->nullable();
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
        Schema::dropIfExists('BUSINESS_OWNERS');
    }
}
