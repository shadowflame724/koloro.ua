<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortfoliocategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfoliocategory', function(Blueprint $table)
		{
			$table->increments('cat_id')->primary();
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
		Schema::drop('portfoliocategory');
	}

}
