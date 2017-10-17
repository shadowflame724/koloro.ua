<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBriefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('money_min')->nullable();
//            $table->integer('money_max')->nullable();
            $table->string('money')->nullable();
            $table->integer('currency')->nullable();
            $table->timestamp('time')->nullable();
            $table->text('wishes');
            $table->string('name', 50);
            $table->string('activity', 50);
            $table->string('site')->nullable();
            $table->string('city', 50);
            $table->string('phone', 50);
            $table->string('email', 40);
            $table->string('about')->nullable();
            $table->timestamps();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brief');
    }
}
