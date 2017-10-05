<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJosK2ItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jos_k2_items', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title')->index('title');
			$table->string('alias')->nullable();
			$table->integer('catid')->index('catid');
			$table->smallInteger('published')->default(0);
			$table->text('introtext', 16777215);
			$table->text('fulltext', 16777215);
			$table->text('video', 65535)->nullable();
			$table->string('gallery')->nullable();
			$table->text('extra_fields', 65535)->nullable();
			$table->text('extra_fields_search', 65535);
			$table->dateTime('created')->index('created');
			$table->integer('created_by')->default(0)->index('created_by');
			$table->string('created_by_alias');
			$table->integer('checked_out')->unsigned();
			$table->dateTime('checked_out_time');
			$table->dateTime('modified');
			$table->integer('modified_by')->default(0);
			$table->dateTime('publish_up');
			$table->dateTime('publish_down');
			$table->smallInteger('trash')->default(0);
			$table->integer('access')->default(0);
			$table->integer('ordering')->default(0)->index('ordering');
			$table->smallInteger('featured')->default(0)->index('featured');
			$table->integer('featured_ordering')->default(0)->index('featured_ordering');
			$table->text('image_caption', 65535);
			$table->string('image_credits');
			$table->text('video_caption', 65535);
			$table->string('video_credits');
			$table->integer('hits')->unsigned()->index('hits');
			$table->text('params', 65535);
			$table->text('metadesc', 65535);
			$table->text('metadata', 65535);
			$table->text('metakey', 65535);
			$table->text('plugins', 65535);
			$table->index(['published','publish_up','publish_down','trash','access'], 'item');
			$table->index(['title','introtext','fulltext','extra_fields_search','image_caption','image_credits','video_caption','video_credits','metadesc','metakey'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jos_k2_items');
	}

}
