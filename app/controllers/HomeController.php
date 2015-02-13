<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showAdminPage()
	{
		return View::make('activity.admin');
	}
	public function showOrganizationProfile()
	{
		return View::make('activity.adminEdit');
	}
	public function showCreate()
	{
		return View::make('activity.createEvent');
	}
	public function showEvents()
	{
		return View::make('activity.events');
	}
	public function showHome()
	{
		return View::make('activity.index');
	}
	public function showLive()
	{
		return View::make('activity.liveEvent');
	}
	public function showlistOrg()
	{
		return View::make('activity.organizations');
	}

	public function showVolunteers()
	{
		return View::make('activity.pastVolunteers');
	}
	public function showRsvp()
	{
		return View::make('activity.rsvp');
	}
	public function showProfile()
	{
		return View::make('activity.volunteer');
	}
	public function showProfileEdit()
	{
		return View::make('activity.volunteerEdit');
	}



	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    Session::flash('successMessage', "You're logged in!.");

		    return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to log in.');

		    return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', "You're logged out.");
		return Redirect::action('HomeController@showLogout');
	}

}

