<?php

class AgenciesController extends \BaseController {

	/**
	 * Display a listing of agencies (organizations).
	 *
	 * @return Response
	 */
	public function index()
	{
		$agencies = Agency::all();

		return View::make('agencies.index', compact('agencies'));
	}

	/**
	 * Show the form for creating a new agency
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agencies.create');
	}

	/**
	 * Store a newly created agency in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Agency::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		agency::create($data);

		return Redirect::route('agencies.index');
	}

	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$agency = Agency::findOrFail($id);
		// dd($agency->activity);
		// $activities = Activity::whereHas('agency', function($q) use($id)
		// {
		// 	$q->where('agency_id', $id);
		// })->with('agency')->get();
		// dd($activities);
		return View::make('agencies.show', compact('agency'));

	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agency = agency::find($id);

		return View::make('agencies.edit', compact('agency'));
	}

	/**
	 * Update the specified agency in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$agency = agency::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Agency::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$agency->update($data);

		return Redirect::route('agencies.index');
	}

	/**
	 * Remove the specified agency from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		agency::destroy($id);

		return Redirect::route('agencies.index');
	}

}
