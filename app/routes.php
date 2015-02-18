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
	return View::make('landing');
});

Route::post('/', 'HomeController@doLogin');

Route::resource('agencies', 'AgenciesController');

Route::resource('locations', 'LocationsController');

Route::resource('users', 'UsersController');

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

/*Volunteer profile view below*/
Route::get('volunteer', 'HomeController@showProfile');
/*Volunteer profile view below*/

Route::get('volunteerEdit', 'HomeController@showProfileEdit');

Route::get('login', 'HomeController@doLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::get('landing', 'HomeController@doLogin');
Route::post('/landing', 'HomeController@doLogin');
Route::get('landing', 'HomeController@doLogout');

Route::get('locations', 'HomeController@doLogin');
Route::post('/locations', 'HomeController@doLogin');
Route::get('locations', 'HomeController@doLogout');

Route::get('search', 'HomeController@doLogin');
Route::post('/search', 'HomeController@doLogin');
Route::get('search', 'HomeController@doLogout');

Route::get('activites', 'HomeController@doLogin');
Route::post('/activites', 'HomeController@doLogin');
Route::get('activites', 'HomeController@doLogout');

Route::get('agencies', 'HomeController@doLogin');
Route::post('/agencies', 'HomeController@doLogin');
Route::get('agencies', 'HomeController@doLogout');
