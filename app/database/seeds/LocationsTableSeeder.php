<?php

class LocationsTableSeeder extends Seeder 
{

	public function run()
	{
		$location = new Location();
		$location->id = '';
		$location->name = 'Hardberger Park';
		$location->address = '13203 Blanco Road';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78216';
		$location->agency_id = '';
		$location->save();

		$location = new Location();
		$location->id = '';
		$location->name = 'SA Food Bank';
		$location->address = '5200 Old Highway 90 West';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78227';
		$location->agency_id = '';
		$location->save();

		$location = new Location();
		$location->id = '';
		$location->name = 'Texas Diaper Bank';
		$location->address = '5415 Bandrea Rd #504';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78216';
		$location->agency_id = '';
		$location->save();

		$location = new Location();
		$location->id = '';
		$location->name = 'Animal Defense League';
		$location->address = '11300 Nacogdoches Rd';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78217';
		$location->agency_id = '';
		$location->save();

		$location = new Location();
		$location->id = '';
		$location->name = 'American Red Cross';
		$location->address = '3642 E Houston St';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78219';
		$location->agency_id = '';
		$location->save();

		$location = new Location();
		$location->id = '';
		$location->name = 'Humane Society';
		$location->address = '4804 Fredericksburg Rd.';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78229';
		$location->agency_id = '';
		$location->save();

		$location = new Location();
		$location->id = '';
		$location->name = 'Habitat for Humanity';
		$location->address = '311 Probandt';
		$location->city = 'San Antonio';
		$location->state = 'TX';
		$location->zip = '78204';
		$location->agency_id = '';
		$location->save();

	}
}
