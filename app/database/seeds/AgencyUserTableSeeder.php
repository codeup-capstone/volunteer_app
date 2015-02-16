<?php

class AgencyUserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('agency_user')->insert(array('agency_id' => 1, 'user_id' => 8));
		DB::table('agency_user')->insert(array('agency_id' => 2, 'user_id' => 8));
		DB::table('agency_user')->insert(array('agency_id' => 3, 'user_id' => 8));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 9));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 9));
		DB::table('agency_user')->insert(array('agency_id' => 6, 'user_id' => 9));
		DB::table('agency_user')->insert(array('agency_id' => 1, 'user_id' => 9));
		DB::table('agency_user')->insert(array('agency_id' => 2, 'user_id' => 9));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 11));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 22));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 33));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 44));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 55));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 66));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 77));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 88));
		DB::table('agency_user')->insert(array('agency_id' => 4, 'user_id' => 99));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 12));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 23));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 34));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 45));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 56));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 67));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 78));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 89));
		DB::table('agency_user')->insert(array('agency_id' => 5, 'user_id' => 90));

	}
}

