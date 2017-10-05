<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBriefConnectServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief_connect_service', function (Blueprint $table) {
            $table->integer('brief_service_id')->unsigned()->nullable();
            $table->integer('brief_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('brief_service_id')
                ->references('id')->on('brief_service')
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
        Schema::drop('brief_connect_service');
    }
}
