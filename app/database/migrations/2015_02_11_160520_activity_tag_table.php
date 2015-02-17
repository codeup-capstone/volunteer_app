<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_tag', function(Blueprint $table)
		{
			$table->integer('event_id')->unsigned();
			$table->integer('tag_id')->unsigned();
			$table->primary(array('event_id', 'tag_id'));
			$table->foreign('event_id')->references('id')->on('events');
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
		Schema::drop('event_tag');
	}

}
