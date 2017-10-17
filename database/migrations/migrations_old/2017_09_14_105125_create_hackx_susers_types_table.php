<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSusersTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_susers_types', function(Blueprint $table)
		{
			$table->boolean('user_type_id')->primary();
			$table->string('type_name', 100);
			$table->enum('site_delete', array('0','1'))->default('0');
			$table->enum('site_edit', array('0','1'))->default('0');
			$table->enum('site_add', array('0','1','2'))->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_susers_types');
	}

}
