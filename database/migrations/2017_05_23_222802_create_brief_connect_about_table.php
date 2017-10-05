<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateBriefConnectAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief_connect_about', function (Blueprint $table) {
            $table->integer('brief_about_id')->unsigned()->nullable();
            $table->integer('brief_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('brief_about_id')
                ->references('id')->on('brief_about')
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
        Schema::drop('brief_connect_about');
    }
}
