<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxPortfolioCatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_portfolio_cats', function(Blueprint $table)
		{
			$table->boolean('cat_id')->primary();
			$table->string('name', 150);
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_portfolio_cats');
	}

}
