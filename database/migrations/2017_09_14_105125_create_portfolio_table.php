<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortfolioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio', function(Blueprint $table)
		{
			$table->increments('job_id');
			$table->string('title');
			$table->string('short_desc', 150)->nullable();
			$table->text('text', 65535);
			$table->string('seo_title')->nullable();
			$table->string('keywords')->nullable();
			$table->string('description')->nullable();
			$table->string('img_small', 36);
			$table->string('img_big', 36);
			$table->text('result', 65535)->nullable();
			$table->string('block_one', 150)->nullable();
			$table->string('block_two', 150)->nullable();
			$table->string('block_tre', 150)->nullable();
			$table->string('procent_one', 10)->nullable();
			$table->string('procent_two', 10)->nullable();
			$table->string('procent_tre', 10)->nullable();
			$table->string('work_url')->nullable();
			$table->integer('rating');
			$table->integer('rait_count');
			$table->enum('cat_1', array('0','1'))->default('0');
			$table->enum('cat_2', array('0','1'))->default('0');
			$table->enum('cat_3', array('0','1'))->default('0');
			$table->enum('cat_4', array('0','1'))->default('0');
			$table->integer('order')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portfolio');
	}

}
