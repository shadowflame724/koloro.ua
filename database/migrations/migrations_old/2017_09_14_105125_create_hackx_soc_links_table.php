<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSocLinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_soc_links', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('soc_g')->nullable();
			$table->string('soc_t')->nullable();
			$table->string('soc_v')->nullable();
			$table->string('soc_f')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_soc_links');
	}

}
