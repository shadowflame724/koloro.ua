<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxContactFormTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_contact_form', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200);
			$table->string('telephone', 150);
			$table->string('email', 150);
			$table->text('text', 65535);
			$table->dateTime('date');
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
		Schema::drop('hackx_contact_form');
	}

}
