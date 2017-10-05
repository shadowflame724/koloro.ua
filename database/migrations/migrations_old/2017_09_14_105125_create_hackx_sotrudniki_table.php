<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSotrudnikiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_sotrudniki', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('name', 150);
			$table->string('phone', 150);
			$table->string('email', 150);
			$table->string('img', 36);
			$table->string('doljnost', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_sotrudniki');
	}

}
