<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxRaschetProektaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_raschet_proekta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->string('email', 150);
			$table->string('phone', 150);
			$table->text('text', 65535)->nullable();
			$table->string('file_name', 36)->nullable();
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
		Schema::drop('hackx_raschet_proekta');
	}

}
