<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_susers', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('user_name', 150);
			$table->string('email', 150);
			$table->string('google_id');
			$table->string('user_img', 36)->default('default.png');
			$table->text('desc', 65535);
			$table->string('password', 32);
			$table->boolean('user_type_id')->default(1);
			$table->string('doljnost', 200)->nullable();
			$table->enum('delete', array('0','1'))->default('0');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_susers');
	}

}
