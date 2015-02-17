<?php

class ReviewsTableSeeder extends Seeder 
{

	public function run()
	{
		$review = new Review();
		$review->review_on_id = 5;
		$review->review_on_type = 'Agency';
		$review->review_by_id = 8;
		$review->headline = 'This place is great!';
		$review->review = 'I have enjoyed my time with the American Red Cross tremendously.  I have served on the Disaster Action Team for the past 7 years and would not trade my experience for anything.';
		$review->rating = 5;
		$review->save();

		$review = new Review();
		$review->review_on_id = 3;
		$review->review_on_type = 'Agency';
		$review->review_by_id = 9;
		$review->headline = 'The diapers were stinky!';
		$review->review = 'I did not really have a good time here.';
		$review->rating = 1;
		$review->save();

		$review = new Review();
		$review->review_on_id = 8;
		$review->review_on_type = 'Volunteer';
		$review->review_by_id = 5;
		$review->headline = 'We love John!';
		$review->review = 'John is great! He always goes the extra mile and has a positive attitude!';
		$review->rating = 5;
		$review->save();

		$review = new Review();
		$review->review_on_id = 9;
		$review->review_on_type = 'Volunteer';
		$review->review_by_id = 3;
		$review->headline = 'Jane might do better elsewhere.';
		$review->review = 'We enjoyed meeting Jane at our monthly diaper packing event, but she did not seem happy to be there.';
		$review->rating = 2;
		$review->save();

	}
}
