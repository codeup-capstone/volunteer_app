<?php

class AgenciesTableSeeder extends Seeder 
{

	public function run()
	{
		$agency = new Agency();
		$agency->name = 'City of San Antonio';
		$agency->image_name = 'cityOfSA.png';
		$agency->description = 'The City of San Antonio is a great place to volunteer! There are opportunities for residents to get involved in activities that enhance our community.';
		$agency->phone = '2102073292';
		$agency->address = 'City Hall 100 Military Plaza';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78205';
		$agency->website = 'http://sanantonio.gov/commpa/volunteer.aspx';
		$agency->category_id=3;
		$agency->save();

		$agency = new Agency();
		$agency->name = 'San Antonio Food Bank';
		$agency->image_name = 'saFoodBank.png';
		$agency->description = 'The San Antonio Food Bank provides food and grocery products to more than 500 partner agency in 16 counties throughout Southwest Texas.';
		$agency->phone = '2104318321';
		$agency->address = '5200 Old Highway 90 West';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78227';
		$agency->website = 'http://safoodbank.org';
		$agency->category_id=7;
		$agency->save();

		$agency = new Agency();
		$agency->name = 'Texas Diaper Bank';
		$agency->image_name = 'texasDiaperBank.png';
		$agency->description = 'Today, Texas Diaper Bank operates three programs that address the health, wellness and basic needs of families: Healthy Babies, Healthy Seniors and Hunger Relief.';
		$agency->phone = '2107318118';
		$agency->address = '5415 Bandrea Rd #504';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78238';
		$agency->website = 'http://texasdiaperbank.org/';
		$agency->category_id=2;
		$agency->save();

		$agency = new Agency();
		$agency->name = 'Animal Defense League';
		$agency->image_name = 'ADL.jpg';
		$agency->headline = 'We take them in. You take them home.';
		$agency->description = 'A no-kill, non-profit animal shelter in San Antonio. Pet personals for adoptable cats and dogs and information about adoption.';
		$agency->phone = '2106551481';
		$agency->address = '11300 Nacogdoches Rd';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78217';
		$agency->website = 'http://adltexas.org/';
		$agency->category_id=1;
		$agency->save();

		$agency = new Agency();
		$agency->name = 'Red Cross San Antonio Area Chapter';
		$agency->image_name = 'redCross.png';
		$agency->description = 'The American Red Cross exists to provide compassionate care to those in need. Our network of generous donors, volunteers and employees share a mission of preventing and relieving suffering, here at home and around the world, through five key service areas: Disaater Relief, Supporting America\'s Military Families, Lifesaving Blood, Health and Safety Services and International Services.';
		$agency->phone = '2102245151';
		$agency->address = '3642 E Houston St';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78219';
		$agency->website = 'http://www.redcross.org/tx/san-antonio/';
		$agency->category_id=4;
		$agency->save();

		$agency = new Agency();
		$agency->name = 'San Antonio Humane Society';
		$agency->image_name = 'humaneSociety.jpg';
		$agency->headline = 'Share the love. Adopt a friend.';
		$agency->description = 'The San Antonio Humane Society is a 501(c)(3) non-profit, no-kill organization that has served Bexar County and its surrounding areas since 1952.';
		$agency->phone = '2102267461';
		$agency->address = '4804 Fredericksburg Rd.';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78229';
		$agency->website = 'http://sahumane.org/';
		$agency->category_id=1;
		$agency->save();

		$agency = new Agency();
		$agency->name = 'Habitat for Humanity of San Antonio';
		$agency->image_name = 'habitat.jpg';
		$agency->headline = 'Change lives.';
		$agency->description = 'Habitat for Humanity of San Antonio (HFHSA) works with low-income families who would not otherwise be able to afford a house. We partner with hardworking families in need and help them build affordable houses for themselves and their families at no interest and no profit. We are not a charity or a “handout” program, but rather we help families help themselves.';
		$agency->phone = '2102235203';
		$agency->address = '311 Probandt';
		$agency->city = 'San Antonio';
		$agency->state = 'TX';
		$agency->zip = '78204';
		$agency->website = 'http://www.habitatsa.org/home.aspx';
		$agency->category_id=8;
		$agency->save();
	}
}
