<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('price')->nullable();
            $table->string('time')->nullable();
            $table->text('price_depends')->nullable();
            $table->text('content')->nullable();
            $table->integer('meta_id')->unsigned()->nullable();
            $table->integer('image_id')->unsigned()->nullable();
            $table->string('slug');
            $table->string('lang')->nullable();
            $table->timestamps();
            $table->integer('status');

            $table->foreign('category_id')
                ->references('id')->on('servicecategory')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('meta_id')
                ->references('id')->on('meta')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('service');
    }
}
