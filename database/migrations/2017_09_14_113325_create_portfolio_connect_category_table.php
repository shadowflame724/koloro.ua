<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioConnectCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_connect_category', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('portfolio_category_id')->unsigned()->nullable();
            $table->foreign('portfolio_category_id')
                ->references('id')->on('portfoliocategory')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('portfolio_id')->unsigned()->nullable();
            $table->foreign('portfolio_id')
                ->references('id')->on('portfolio')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::drop('portfolio_connect_category');
    }
}
