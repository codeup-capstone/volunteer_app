<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('login', 'HomeController@doLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::get('/', function()
{
	if (Auth::id()) {
		$user = User::findOrFail(Auth::id());
		return View::make('landing')->with('user', $user);
	} else {
		return View::make('landing');
	}	
});

Route::post('/', 'HomeController@doLogin');

Route::resource('agencies', 'AgenciesController');

Route::get('reviews', 'AgenciesController@showReviews');

Route::resource('locations', 'LocationsController');

Route::get('RSVP/create/{activityID}', 'RSVPController@create');

Route::resource('RSVP', 'RSVPController');

Route::resource('users', 'UsersController');


Route::get('quickpick','ActivitiesController@showRandom');

Route::resource('activities', 'ActivitiesController');

Route::get('events','ActivitiesController@index');

Route::get('landing', 'HomeController@showHome');
Route::post('landing', 'HomeController@doLogin');

Route::get('rsvp', 'HomeController@showRsvp');

Route::get('admin', 'HomeController@showAdminPage');

Route::get('adminEdit', 'HomeController@showOrganizationProfile');

Route::get('createEvent', 'HomeController@showCreate');

Route::get('liveEvent', 'HomeController@showLive');

Route::get('organizations', 'HomeController@showlistOrg');

Route::get('pastVolunteers', 'HomeController@showVolunteers');

Route::get('usersRSVP', 'HomeController@showUsersRSVP');

Route::get('search', 'HomeController@search');

Route::post('uploadImage', 'UsersController@show');

Route::get('aboutUs', 'HomeController@showAboutUs');

/*Volunteer profile view below*/
Route::get('volunteer', 'HomeController@showProfile');
/*Volunteer profile view below*/
Route::get('volunteerEdit', 'HomeController@showProfileEdit');