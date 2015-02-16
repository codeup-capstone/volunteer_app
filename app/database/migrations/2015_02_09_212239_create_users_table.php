<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('email', 100);
			$table->string('password', 200);
			$table->rememberToken();
			$table->string('first_name', 45);
			$table->string('last_name', 45);
			$table->string('image_url', 100)->nullable();
			$table->text('profile')->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('city', 45)->nullable();
			$table->char('state',2)->nullable();
			$table->char('zip',5)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
