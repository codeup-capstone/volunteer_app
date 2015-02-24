<?php

class ReviewsTableSeeder extends Seeder 
{

	public function run()
	{
		$review = new Review();
		$review->agency_id = 2;
		$review->user_id = 11;
		$review->review_date = '2015-02-15';
		$review->headline = 'This place is great!';
		$review->review = 'I have enjoyed my time with the San Antonio Food Bank tremendously.  I have served on the donation collection team for the past 7 years and would not trade my experience for anything.';
		$review->rating = 5;
		$review->save();

		$review = new Review();
		$review->agency_id = 2;
		$review->user_id = 12;
		$review->review_date = '2015-01-21';
		$review->headline = 'We would definitely come back.';
		$review->rating = 4;
		$review->save();

		$review = new Review();
		$review->agency_id = 2;
		$review->user_id = 13;
		$review->review_date = '2014-11-15';
		$review->headline = 'Very rewarding experience';
		$review->rating = 5;
		$review->save();

		$review = new Review();
		$review->agency_id = 2;
		$review->user_id = 14;
		$review->review_date = '2014-12-27';
		$review->headline = 'This is now a Christmas tradition for our family';
		$review->rating = 4;
		$review->save();
	}
}
