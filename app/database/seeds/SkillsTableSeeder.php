<?php

class SkillsTableSeeder extends Seeder 
{

	public function run()
	{
		$skill = new Skill();
		$skill->skill = 'Accounting';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Administration';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Coaching';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Construction';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Cooking';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Data Entry';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Event Planning';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'First Aid';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Fundraising';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Grant Writing';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Information Technology';
		$skill->save();

		$skill = new Skill();
		$skill->skill = 'Teaching';
		$skill->save();
	}
}

