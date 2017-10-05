<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSubscribersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_subscribers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200);
			$table->string('email', 200);
			$table->date('date');
			$table->enum('view', array('0','1'))->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_subscribers');
	}

}
