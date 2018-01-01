<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('USERS', function (Blueprint $table) {
            $table->integer('id')->unsigned()->nullable();
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->enum('active',['yes','no']);
            $table->unique('email');
            $table->foreign('id')->references('id')->on('BUSINESS_OWNERS');
            $table->foreign('email')->references('business_email')->on('BUSINESSES');
            $table->rememberToken();
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
        Schema::dropIfExists('USERS');
    }
}
