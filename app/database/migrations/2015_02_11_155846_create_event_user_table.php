<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_user', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->tinyInteger('rsvp');
			$table->tinyInteger('approved');
			$table->tinyInteger('cancelled');
			$table->tinyInteger('attended');
			$table->primary(array('user_id', 'event_id'));
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('event_id')->references('id')->on('events');
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event_user');
	}

}
