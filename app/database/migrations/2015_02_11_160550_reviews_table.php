<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function(Blueprint $table)
		{
			$table->integer('agency_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->date('review_date');
			$table->string('headline', 100);
			$table->text('review')->nullable();
			$table->tinyInteger('rating');
			$table->timestamps();
			$table->primary(array('agency_id', 'user_id'));
			$table->foreign('agency_id')->references('id')->on('agencies');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}

}
