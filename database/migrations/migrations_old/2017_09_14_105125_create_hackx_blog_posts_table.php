<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHackxBlogPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hackx_blog_posts', function(Blueprint $table)
		{
			$table->increments('post_id');
			$table->string('post_title', 200);
			$table->string('seo_title')->nullable();
			$table->text('post_text', 16777215);
			$table->string('img', 37)->default('related_img2.jpg');
			$table->dateTime('date');
			$table->string('keywords')->nullable();
			$table->string('description_seo')->nullable();
			$table->string('description', 500)->nullable();
			$table->integer('user_id')->unsigned();
			$table->integer('views')->unsigned();
			$table->float('rating', 10, 0)->unsigned();
			$table->integer('rait_count')->unsigned();
			$table->string('sec_url')->nullable();
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
		Schema::drop('hackx_blog_posts');
	}

}
