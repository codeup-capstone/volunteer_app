<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 100; $i++) { 
			$user = new User();

			$user->email = $faker->email;
			$user->password = Hash::make('codeup');
			$user->first_name = $faker->firstName;
			$user->last_name = $faker->lastName;
			$user->profile = $faker->paragraph($nbSentences = 3);
			$user->phone = $faker->phoneNumber;
			$user->city = $faker->city;
			$user->state = $faker->stateAbbr;
			$user->zip = $faker->postcode;
			$user->save();
		}


	}

}