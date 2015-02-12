<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->text('description')->nullable();
			$table->date('event_date');
			$table->time('start_time');
			$table->time('end_time');
			$table->datetime('cutoff_time');
			$table->string('image_name', 100)->nullabe();
			$table->string('headline', 100)->nullable();
			$table->string('image_url', 100)->nullable();
			$table->string('contact_name', 100);
			$table->char('contact_phone', 10);
			$table->string('contact_email', 100);
			$table->tinyInteger('max_volunteers');
			$table->char('min_age', 2)->nullable;
			$table->integer('agency_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->foreign('agency_id')->references('id')->on('agencies');
			$table->foreign('location_id')->references('id')->on('locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
