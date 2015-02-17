<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivityTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_tag', function(Blueprint $table)
		{
			$table->integer('activity_id')->unsigned();
			$table->integer('tag_id')->unsigned();
			$table->primary(array('activity_id', 'tag_id'));
			$table->foreign('activity_id')->references('id')->on('activities');
			$table->foreign('tag_id')->references('id')->on('tags');
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_tag');
	}

}
