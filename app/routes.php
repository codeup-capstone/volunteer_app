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

Route::get('/', function()
{

	// if (Auth::check()) {
	// 	dd(Auth::id());
	// }

	return View::make('landing');
});

Route::resource('agencies', 'AgenciesController');

Route::resource('locations', 'LocationsController');

Route::resource('users', 'UsersController');

Route::resource('activities', 'ActivitiesController');

Route::resource('events', 'ActivitiesController');

// Route::get('events','ActivitiesController@index');

Route::get('landing', 'HomeController@showHome');
Route::post('landing', 'HomeController@doLogin');

Route::get('rsvp', 'HomeController@showRsvp');

Route::get('admin', 'HomeController@showAdminPage');

Route::get('adminEdit', 'HomeController@showOrganizationProfile');

Route::get('createEvent', 'HomeController@showCreate');

Route::get('liveEvent', 'HomeController@showLive');

Route::get('organizations', 'HomeController@showlistOrg');

Route::get('pastVolunteers', 'HomeController@showVolunteers');

/*Volunteer profile view below*/
Route::get('volunteer', 'HomeController@showProfile');
/*Volunteer profile view below*/

Route::get('volunteerEdit', 'HomeController@showProfileEdit');

Route::get('login', 'HomeController@doLogin');
Route::post('login', 'HomeController@doLogin');
