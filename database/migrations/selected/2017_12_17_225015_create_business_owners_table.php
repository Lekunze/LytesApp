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
            $table->string('business_owner_last_name',20)->nullable();
            $table->string('business_owner_given_names',50)->nullable();
            $table->date('business_owner_dob')->nullable();
            $table->string('business_owner_nationality',30)->nullable();
            $table->string('business_owner_id_type',2)->nullable();
            $table->string('business_owner_id_number',10)->nullable();
            $table->string('business_owner_phone',10)->nullable();
            $table->string('business_owner_phone_2',10)->nullable();
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
