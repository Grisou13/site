<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->timestamps();
		});
    DB::raw('set foreign_key_checks=1');
		Schema::create('post_categories_pivot',function(Blueprint $table){
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts');
			$table->integer('categorie_id')->unsigned();
			$table->foreign('categorie_id')->references('id')->on('categories');
		});
    DB::raw('set foreign_key_checks=0');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post_categories_pivot');
		Schema::drop('categories');
	}

}
