<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSocWidgetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_soc_widgets', function(Blueprint $table)
		{
			$table->boolean('widget_id')->primary();
			$table->text('widget_vk', 65535);
			$table->text('widget_fb', 65535)->nullable();
			$table->text('widget_tw', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_soc_widgets');
	}

}
