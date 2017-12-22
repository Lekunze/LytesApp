<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SHELVES', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sid')->unsigned()->nullable();
            $table->string('shelf_name')->nullable();
            $table->foreign('sid')->references('id')->on('BUSINESSES');
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
        Schema::dropIfExists('SHELVES');
    }
}
