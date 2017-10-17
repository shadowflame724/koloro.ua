<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxUslugiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_uslugi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('text', 65535);
			$table->string('seo_title')->nullable();
			$table->string('keywords')->nullable();
			$table->string('description')->nullable();
			$table->boolean('block_id')->nullable();
			$table->string('url_address2')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_uslugi');
	}

}
