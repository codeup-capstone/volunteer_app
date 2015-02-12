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

		$user = new User();
		$user->email = 'wendey.loenard@sanantonio.gov';
		$user->password = Hash::make('codeup');
		$user->first_name = 'Wendey';
		$user->last_name = 'Leonard';
		$user->profile = '';
		$user->phone = '2102073292';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78205';
		$user->save();

		$user = new User();
		$user->email = 'pworthen@safoodbank.org';
		$user->password = Hash::make('codeup');
		$user->first_name = 'Pete';
		$user->last_name = 'Worthen';
		$user->profile = '';
		$user->phone = '2104318321';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78227';
		$user->save();

		$user = new User();
		$user->email = 'aetorija@texasdiaperbank.org';
		$user->password = Hash::make('codeup');
		$user->first_name = 'Angelica';
		$user->last_name = 'Torija';
		$user->profile = '';
		$user->phone = '2107318118';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78238';
		$user->save();
	
		$user = new User();
		$user->email = 'sbrooks@adltexas.org';
		$user->password = Hash::make('codeup');
		$user->first_name = 'Sabine';
		$user->last_name = 'Brooks';
		$user->profile = '';
		$user->phone = '2106551481';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78217';
		$user->save();

		$user = new User();
		$user->email = 'adeluna@redcross.org';
		$user->password = Hash::make('');
		$user->first_name = 'Angie';
		$user->last_name = 'De Luna';
		$user->profile = '';
		$user->phone = '2102245151';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78219';
		$user->save();

		$user = new User();
		$user->email = 'orientation@SAhumane.org';
		$user->password = Hash::make('codeup');
		$user->first_name = 'Cathy';
		$user->last_name = 'Rea';
		$user->profile = '';
		$user->phone = '2102267461';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78229';
		$user->save();

		$user = new User();
		$user->email = 'sarah@habitatsa.org';
		$user->password = Hash::make('codeup');
		$user->first_name = 'Sarah';
		$user->last_name = 'Arrendondo';
		$user->profile = '';
		$user->phone = '2102235203';
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78204';
		$user->save();

	}

}