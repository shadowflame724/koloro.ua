<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
//            $table->string('surname',20)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('image_id')->unsigned()->nullable();
            $table->string('post')->nullable();
            $table->string('google')->nullable();
            $table->string('phone')->nullable();
            $table->string('about')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('status');

            $table->foreign('image_id')
                ->references('id')->on('file')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
