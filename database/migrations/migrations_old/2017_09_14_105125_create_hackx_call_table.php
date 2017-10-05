<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxCallTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_call', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->string('phone', 150);
			$table->string('call_date', 150)->nullable();
			$table->date('date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_call');
	}

}
