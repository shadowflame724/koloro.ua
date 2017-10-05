<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_sections', function(Blueprint $table)
		{
			$table->increments('section_id');
			$table->string('section_name', 100);
			$table->string('url_name', 50)->default('home');
			$table->integer('parent_id')->unsigned()->default(0);
			$table->enum('visible', array('0','1'))->default('1');
			$table->string('seo_title');
			$table->string('keywords')->nullable();
			$table->string('description')->nullable();
			$table->string('url_address')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_sections');
	}

}
