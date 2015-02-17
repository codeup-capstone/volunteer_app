<?php

class EventUserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('event_user')->insert(array('event_id' => 1, 'user_id' => 8));
		DB::table('event_user')->insert(array('event_id' => 5, 'user_id' => 8));
		DB::table('event_user')->insert(array('event_id' => 17, 'user_id' => 8));
		DB::table('event_user')->insert(array('event_id' => 20, 'user_id' => 8));
		DB::table('event_user')->insert(array('event_id' => 50, 'user_id' => 8));
		DB::table('event_user')->insert(array('event_id' => 103, 'user_id' => 8));
		DB::table('event_user')->insert(array('event_id' => 1, 'user_id' => 9));
		DB::table('event_user')->insert(array('event_id' => 5, 'user_id' => 9));
		DB::table('event_user')->insert(array('event_id' => 17, 'user_id' => 9));
		DB::table('event_user')->insert(array('event_id' => 20, 'user_id' => 9));
		DB::table('event_user')->insert(array('event_id' => 50, 'user_id' => 9));
		DB::table('event_user')->insert(array('event_id' => 103, 'user_id' => 9));
	}
}

