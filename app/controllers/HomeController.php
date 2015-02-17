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
		return View::make('activities.admin');
	}
	public function showOrganizationProfile()
	{
		return View::make('activities.adminEdit');
	}
	public function showCreate()
	{
		return View::make('activities.createEvent');
	}
	public function showEvents()
	{
		return View::make('activities.events');
	}
	public function showHome()
	{
		return View::make('landing');
	}
	public function showLive()
	{
		return View::make('activities.liveEvent');
	}
	public function showlistOrg()
	{
		return View::make('activities.organizations');
	}

	public function showVolunteers()
	{
		return View::make('activities.pastVolunteers');
	}
	public function showRsvp()
	{
		return View::make('activities.rsvp');
	}
	public function showProfile()
	{
		$id = Auth::id();

		$user = User::find($id)->with('activity');
		dd($user)

		return View::make('activities.showProfile')->compact($user);
	}
	public function showProfileEdit()
	{
		$id = Auth::id();

		// $activities = Activity::

		return View::make('activities.volunteerRSVPEdit');
	}
	public function showLogin()
	{
		return View::make('master');
	}
	public function showLogout()
	{
		return View::make('master');
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
		    return Redirect::action('HomeController@showHome');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', "You're logged out.");
		return Redirect::to('/');
	}

}

