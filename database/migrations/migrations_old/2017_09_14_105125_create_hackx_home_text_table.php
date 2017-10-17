<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxHomeTextTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_home_text', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->text('text_one', 65535);
			$table->text('text_two', 65535)->nullable();
			$table->text('text_tre', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_home_text');
	}

}
