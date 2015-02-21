<?php

class RSVPController extends \BaseController {

	/**
	 * Display a listing of RSVP (organizations).
	 *
	 * @return Response
	 */
	public function index()
	{
		// $RSVP = RSVP::all();

		// return View::make('RSVP.index', compact('RSVP'));

		$activity = new Activity();
		$activity->id = Input::get('id');
		// dd($activityId);
		dd($activity);
		return Redirect::back();
	}

	/**
	 * Show the form for creating a new RSVP
	 *
	 * @return Response
	 */
	public function create($activityID)
	{
		$user = Auth::user();
		// $activity = Activity::findOrFail($activityID);

		$user->activities()->attach($activityID);

		return Redirect::action('ActivitiesController@show', $activityID);
	}

	/**
	 * Store a newly created RSVP in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $input = Input::all();
		// dd($input);
		// $activity = new Activity();
		// dd($activity);
		// $MODEL->save();
		// return Redirect::back(), compact('activity');
		// return View::make('activities.show', compact('activity'));
	

		// $validator = Validator::make($data = Input::all(), RSVP::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// RSVP::create($data);

		// return Redirect::route('RSVP.index');
	}

	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$RSVP = RSVP::findOrFail($id);

		return View::make('RSVP.show', compact('RSVP'));
	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$RSVP = RSVP::find($id);

		return View::make('RSVP.edit', compact('RSVP'));
	}

	/**
	 * Update the specified RSVP in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$RSVP = RSVP::findOrFail($id);

		$validator = Validator::make($data = Input::all(), RSVP::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$RSVP->update($data);

		return Redirect::route('RSVP.index');
	}

	/**
	 * Remove the specified RSVP from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		RSVP::destroy($id);

		return Redirect::route('RSVP.index');
	}

}
