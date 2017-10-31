<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('CUSTOMER_DETAILS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id');
            $table->primary('customer_id');
            $table->string('fullname');
            $table->string('password');
            $table->timestamps();
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('CUSTOMER_DETAILS');
    }
}
