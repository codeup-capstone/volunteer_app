 <?php

class ActivitiesController extends \BaseController {

	/**
	 * Display a listing of activities (events).
	 *
	 * @return Response
	 */
	public function index()
	{
			if (Input::has('search')) {
				$search = Input::get('search');
				$query = Activity::with('users', 'agency');

				$query->where('name', 'like', '%' . $search . '%');
				$query->orWhere('description', 'like', '%' . $search . '%');
				$query->orWhere('event_date', 'like', '%' . $search . '%');
				$query->orderBy('event_date', 'ASC');
				$activities = $query->simplePaginate(10);

				//dd($activities);

				return View::make('activities.index')->with('activities', $activities);
			} 

			else {

			$activities = Activity::with('agency')->orderBy('event_date', 'ASC')->simplePaginate(10);
			// $activities = Activity::all();

			return View::make('activities.index', compact('activities'));

			// $activities = Activity::with('user')->orderBy('event_date', 'desc')->paginate(4);
			// return View::make('activities.index')->with('activities', $activities);

			}
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

		$activity->name = Input::get('name');
		$activity->description = Input::get('description');
		$activity->event_date = Input::get('event_date');
		$activity->start_time = Input::get('start_time');
		$activity->end_time = Input::get('end_time');
		$activity->contct_name = Input::get('contct_name');
		$activity->contact_phone = Input::get('contact_phone');
		$activity->contact_email = Input::get('contact_email');

		if (Input::hasFile('image_name')) {
			$activity->uploadImage(Input::file('image_name'));
		}
		$activity->save();

		return Redirect::action('ActivitiesController@show', $activity->id);
	}

	public function show($id)
	{
		$activity = Activity::findOrFail($id);
		// $activityId = $activity->id;
		return View::make('activities.show', compact('activity'));
	}

	public function showRandom()
	{

		// Keep for later
		// $offset=mt_rand(1,10);

		$activity = Activity::whereRaw('event_date >= now()')->get()->random();
			// $activityId = $activity->id;
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

		$activity->name = Input::get('name');
		$activity->description = Input::get('description');
		$activity->event_date = Input::get('event_date');
		$activity->start_time = Input::get('start_time');
		$activity->end_time = Input::get('end_time');
		$activity->contct_name = Input::get('contact_name');
		$activity->contact_phone = Input::get('contact_phone');
		$activity->contact_email = Input::get('contact_email');

		if (Input::hasFile('image_name')) {
			$activity->uploadImage(Input::file('image_name'));
		}
		$activity->save();
		return Redirect::route('ActivitiesController@show', $activity->id);
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
