<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('description',500);
            $table->integer('image_id')->unsigned()->nullable();
            $table->integer('meta_id')->unsigned()->nullable();
            $table->text('content');
            $table->integer('rating')->nullable();
            $table->integer('votes')->nullable();
            $table->string('slug');
            $table->integer('views')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->integer('status');

            $table->foreign('category_id')
                ->references('id')->on('blogcategory')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('image_id')
                ->references('id')->on('file')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('meta_id')
                ->references('id')->on('meta')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog');
    }
}
