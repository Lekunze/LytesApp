<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerShoppingHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('CUSTOMER_SHOPPING_HISTORY', function (Blueprint $table) {
            $table->string('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('CUSTOMER_DETAILS');
            $table->string('items_purchased');
            $table->string('quantity');
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
        Schema::dropIfExists('CUSTOMER_SHOPPING_HISTORY');
    }
}
