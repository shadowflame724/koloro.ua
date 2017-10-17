<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxContactInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_contact_info', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('head_tel_one', 100)->nullable();
			$table->string('head_tel_two', 100)->nullable();
			$table->string('head_email', 150)->nullable();
			$table->string('footer_tel_one', 100)->nullable();
			$table->string('footer_tel_two', 100)->nullable();
			$table->string('footer_tel_tre', 100)->nullable();
			$table->string('address', 300)->nullable();
			$table->string('job_date', 200)->nullable();
			$table->string('contact_tel_1', 150)->nullable();
			$table->string('contact_tel_2', 150)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_contact_info');
	}

}
