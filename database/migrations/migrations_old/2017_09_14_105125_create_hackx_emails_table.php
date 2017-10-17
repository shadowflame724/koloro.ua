<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_emails', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('rasschet', 200)->nullable();
			$table->string('konsultaciya3', 200)->nullable();
			$table->string('konsultaciya2', 200)->nullable();
			$table->string('konsultaciya', 200)->nullable();
			$table->string('director3', 200)->nullable();
			$table->string('director2', 200)->nullable();
			$table->string('director', 200)->nullable();
			$table->string('contact3', 200)->nullable();
			$table->string('contact2', 200)->nullable();
			$table->string('contact', 200)->nullable();
			$table->string('call3', 200)->nullable();
			$table->string('call2', 200)->nullable();
			$table->string('call', 200)->nullable();
			$table->string('rasschet3', 200)->nullable();
			$table->string('rasschet2', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_emails');
	}

}
