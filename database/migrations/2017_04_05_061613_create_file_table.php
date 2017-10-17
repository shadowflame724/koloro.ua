<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('alt')->nullable();
            $table->string('link');
            $table->integer('form_id')->unsigned()->nullable();
            $table->integer('brief_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('form_id')
                ->references('id')->on('form')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('brief_id')
                ->references('id')->on('brief')
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
        Schema::drop('file');
    }
}
