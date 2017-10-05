<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxBlockUslugTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_block_uslug', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('title');
			$table->string('price', 100)->nullable();
			$table->string('term', 150)->nullable();
			$table->text('text', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_block_uslug');
	}

}
