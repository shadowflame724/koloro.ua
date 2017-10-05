<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxUslugiShortTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_uslugi_short', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('parent_id');
			$table->string('url_address')->nullable();
			$table->string('url_address2')->nullable();
			$table->string('color', 10)->nullable();
			$table->string('image', 36)->nullable();
			$table->boolean('position');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_uslugi_short');
	}

}
