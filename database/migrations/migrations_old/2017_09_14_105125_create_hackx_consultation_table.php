<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxConsultationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_consultation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 150);
			$table->string('phone', 100);
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
		Schema::drop('hackx_consultation');
	}

}
