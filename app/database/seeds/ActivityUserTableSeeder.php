<?php

class ActivityUserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('activity_user')->insert(array('activity_id' => 1, 'user_id' => 8));
		DB::table('activity_user')->insert(array('activity_id' => 5, 'user_id' => 8));
		DB::table('activity_user')->insert(array('activity_id' => 17, 'user_id' => 8));
		DB::table('activity_user')->insert(array('activity_id' => 20, 'user_id' => 8));
		DB::table('activity_user')->insert(array('activity_id' => 50, 'user_id' => 8));
		DB::table('activity_user')->insert(array('activity_id' => 103, 'user_id' => 8));
		DB::table('activity_user')->insert(array('activity_id' => 1, 'user_id' => 9));
		DB::table('activity_user')->insert(array('activity_id' => 5, 'user_id' => 9));
		DB::table('activity_user')->insert(array('activity_id' => 17, 'user_id' => 9));
		DB::table('activity_user')->insert(array('activity_id' => 20, 'user_id' => 9));
		DB::table('activity_user')->insert(array('activity_id' => 50, 'user_id' => 9));
		DB::table('activity_user')->insert(array('activity_id' => 103, 'user_id' => 9));
	}
}

