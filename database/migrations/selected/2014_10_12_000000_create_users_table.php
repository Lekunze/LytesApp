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
            $table->increments('id');
            $table->integer('oid')->unsigned()->nullable();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password',30);
            $table->enum('active',['yes','no']);
            $table->foreign('oid')->references('id')->on('BUSINESS_OWNERS');
            $table->foreign('email')->references('business_email')->on('BUSINESSES');
            $table->foreign('username')->references('business_slug')->on('BUSINESSES');
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
