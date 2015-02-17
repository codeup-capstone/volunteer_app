<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_user', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->integer('activity_id')->unsigned();
			$table->date('cancelled');
			$table->tinyInteger('attended');
			$table->primary(array('user_id', 'activity_id'));
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('activity_id')->references('id')->on('activities');
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity_user');
	}

}
