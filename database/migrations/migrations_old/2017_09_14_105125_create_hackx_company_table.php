<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_company', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->text('company', 65535)->nullable();
			$table->text('missiya', 65535)->nullable();
			$table->text('text', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_company');
	}

}
