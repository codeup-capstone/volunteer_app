<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('SkillUserTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('AgenciesTableSeeder');
		$this->call('AgencyAdminTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('ActivitiesTableSeeder');
		// $this->call('ActivityUserTableSeeder');
		$this->call('ReviewsTableSeeder');
		// $this->call('TagsTableSeeder');
		// $this->call('ActivityTagTableSeeder');
	}

}
