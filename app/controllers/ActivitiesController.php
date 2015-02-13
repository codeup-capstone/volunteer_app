<?php

class ActivitiesController extends \BaseController {

	/**
	 * Display a listing of activities (events).
	 *
	 * @return Response
	 */
	public function index()
	{
		$activities = Activity::all();

		return View::make('activities.events', compact('activities'));
	}

	/**
	 * Show the form for creating a new activity
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('activities.create');
	}

	/**
	 * Store a newly created activity in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Activity::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Activity::create($data);

		return Redirect::route('activities.index');
	}

	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$activity = Activity::findOrFail($id);

		return View::make('activities.show', compact('activity'));
	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$activity = Activity::find($id);

		return View::make('activities.edit', compact('activity'));
	}

	/**
	 * Update the specified activity in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$activity = Activity::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Activity::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$activity->update($data);

		return Redirect::route('activities.index');
	}

	/**
	 * Remove the specified activity from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Activity::destroy($id);

		return Redirect::route('activities.index');
	}

}
