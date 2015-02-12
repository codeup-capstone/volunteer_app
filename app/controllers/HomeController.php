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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showOrganization()
	{
		return View::make('organization');
	}

	public function showVolunteer()
	{
		return View::make('Volunteer');
	}

	public function showAdmin()
	{
		return View::make('admin');
	}

	public function showActivity()
	{
		return View::make('activity');
	}

	public function showProfile()
	{
		return View::make('contact');
	}

	public function showLogin()
	{
		return View::make('login');
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
}
