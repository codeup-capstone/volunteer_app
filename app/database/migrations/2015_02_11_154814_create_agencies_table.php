<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agencies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('image_name', 100);
			$table->string('headline', 100)->nullable();
			$table->string('image_url', 100)->nullable();
			$table->text('description')->nullable();
			$table->char('phone', 10)->nullable();
			$table->string('address', 100)->nullable();
			$table->string('city', 45)->nullable();
			$table->char('state',2)->nullable();
			$table->char('zip',5)->nullable();
			$table->string('website', 100)->nullable();
			$table->integer('category_id')->unsigned();
			$table->integer('admin_user_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->foreign('admin_user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agencies');
	}

}
