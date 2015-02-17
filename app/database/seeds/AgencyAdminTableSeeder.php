<?php

class AgencyAdminTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('agency_admin')->insert(array('agency_id' => 1, 'admin_id' => 1));
		DB::table('agency_admin')->insert(array('agency_id' => 2, 'admin_id' => 2));
		DB::table('agency_admin')->insert(array('agency_id' => 3, 'admin_id' => 3));
		DB::table('agency_admin')->insert(array('agency_id' => 4, 'admin_id' => 4));
		DB::table('agency_admin')->insert(array('agency_id' => 5, 'admin_id' => 5));
		DB::table('agency_admin')->insert(array('agency_id' => 6, 'admin_id' => 6));
		DB::table('agency_admin')->insert(array('agency_id' => 7, 'admin_id' => 7));
	}
}

