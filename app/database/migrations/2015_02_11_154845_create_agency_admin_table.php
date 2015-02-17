<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agency_admin', function(Blueprint $table)
		{
			$table->integer('agency_id')->unsigned();
			$table->integer('admin_id')->unsigned();
			$table->primary('agency_id');
			$table->foreign('agency_id')->references('id')->on('agencies');
			$table->foreign('admin_id')->references('id')->on('users');
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agency_admin');
	}

}
