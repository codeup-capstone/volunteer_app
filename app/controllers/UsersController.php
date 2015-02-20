<?php
class UsersController extends \BaseController {
	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index', compact('users'));
	}
	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}
	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'first_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
			'last_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
		    'email'  	=> 'Required|Between:3,64|Email|Unique:users,email',
			'password'	=>'Required|AlphaNum|Between:4,15|Confirmed'
		);

		$validator = Validator::make($data = Input::all(), User::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$user = new User();
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->email = Input::get('email');
		$user->password = Input::get('password');
		$user->profile = Input::get('profile');
		$user->city = Input::get('city');
		$user->state = Input::get('state');
		$user->zip = Input::get('zip');
		$user->save();

		$validator = Validator::make($data = Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$user->update($data);

		if (Input::hasFile('image_url')) {
				$user->uploadImage(Input::file('image_url'));

				$user->save();			
			}
		return Redirect::route('landing');
	}
	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		return View::make('users.show', compact('user'));
	}
	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('users.edit', compact('user'));
	}
	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'first_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
			'last_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
			'email'  	=> 'Required|Between:3,64|Email|Unique:users,email,'.$id,
		);

		$user = User::findOrFail($id);
		$validator = Validator::make($data = Input::all(), $rules);
		if ($validator->fails())
		{
			dd(Input::all());
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$user->update($data);

		if (Input::hasFile('image_url')) {
				$user->uploadImage(Input::file('image_url'));

				$user->save();			
			}
		return Redirect::route('users.index');
	}
	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		return Redirect::route('users.index');
	}

}