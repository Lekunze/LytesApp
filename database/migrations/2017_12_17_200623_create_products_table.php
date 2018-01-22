<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCTS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bid')->unsigned()->nullable();
            $table->foreign('bid')->references('id')->on('BUSINESSES');
            $table->integer('sid')->unsigned()->nullable();
            $table->foreign('sid')->references('id')->on('SHELVES');
            $table->string('product_name')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_slug')->nullable();
            $table->string('product_images')->nullable();
            $table->string('product_ratings')->nullable();
            $table->string('product_discounts')->nullable();
            $table->string('product_hits')->nullable();
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
        Schema::dropIfExists('PRODUCTS');
    }
}
