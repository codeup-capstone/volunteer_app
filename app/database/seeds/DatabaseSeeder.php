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
		// $this->call('CategoriesTableSeeder');
		// $this->call('AgenciesTableSeeder');
		// $this->call('AgencyUserTableSeeder');
		// $this->call('LocationsTableSeeder');
		// $this->call('EventsTableSeeder');
		// $this->call('EventUserTableSeeder');
		// $this->call('TagsTableSeeder');
		// $this->call('EventTagTableSeeder');
		// $this->call('ReviewsTableSeeder');
	}

}
