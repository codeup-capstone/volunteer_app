<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('address', 100);
			$table->string('city', 45);
			$table->char('state',2);
			$table->char('zip',5);
			$table->timestamps();
			$table->integer('agency_id')->unsigned();
			$table->foreign('agency_id')->references('id')->on('agencies');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
