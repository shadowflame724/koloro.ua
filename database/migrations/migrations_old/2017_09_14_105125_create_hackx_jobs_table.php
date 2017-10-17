<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_jobs', function(Blueprint $table)
		{
			$table->integer('id_jobs', true);
			$table->string('job_name');
			$table->text('job_description', 65535);
			$table->string('job_url');
			$table->string('img_icon');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_jobs');
	}

}
