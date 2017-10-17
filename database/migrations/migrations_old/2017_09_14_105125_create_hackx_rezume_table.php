<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxRezumeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_rezume', function(Blueprint $table)
		{
			$table->integer('id_resume', true);
			$table->string('name');
			$table->string('email');
			$table->text('text', 65535);
			$table->string('file');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_rezume');
	}

}
