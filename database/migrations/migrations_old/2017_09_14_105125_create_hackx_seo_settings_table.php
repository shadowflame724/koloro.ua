<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxSeoSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_seo_settings', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('home_title')->nullable();
			$table->string('home_keywords')->nullable();
			$table->string('home_description')->nullable();
			$table->string('portfolio_title')->nullable();
			$table->string('portfolio_keywords')->nullable();
			$table->string('portfolio_description')->nullable();
			$table->string('service_title')->nullable();
			$table->string('service_keywords')->nullable();
			$table->string('service_description')->nullable();
			$table->string('blog_title')->nullable();
			$table->string('blog_keywords')->nullable();
			$table->string('blog_description')->nullable();
			$table->string('company_title')->nullable();
			$table->string('company_keywords')->nullable();
			$table->string('company_description')->nullable();
			$table->string('contact_title')->nullable();
			$table->string('contact_keywords')->nullable();
			$table->string('contact_description')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hackx_seo_settings');
	}

}
