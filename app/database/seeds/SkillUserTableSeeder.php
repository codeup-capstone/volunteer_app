<?php

class SkillUserTableSeeder extends Seeder 
{

	public function run()
	{
		DB::table('skill_user')->insert(array('skill_id' => 1, 'user_id' => 8));
		DB::table('skill_user')->insert(array('skill_id' => 2, 'user_id' => 8));
		DB::table('skill_user')->insert(array('skill_id' => 3, 'user_id' => 8));
		DB::table('skill_user')->insert(array('skill_id' => 4, 'user_id' => 9));
		DB::table('skill_user')->insert(array('skill_id' => 5, 'user_id' => 9));
		DB::table('skill_user')->insert(array('skill_id' => 6, 'user_id' => 9));
	}
}

