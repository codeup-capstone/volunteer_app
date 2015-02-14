@extends('layouts.master')

@section('content')

<table class="table table-striped table-hover">
    <tr>
      <th>Event Name</th>
      <th>Organization</th>
      <th>Event Date</th>
      <th>Start Time</th>
      <th>End Time</th>
    </tr>
  @foreach ($activities as $activity)
    <tr>
    <td><a href="{{{ action('ActivitiesController@show', $activity->id) }}}">{{ $activity->name }}</a></td>
    <td>
      {{ $activity->agency_id }}
    </td>
    <td>{{ $activity->event_date }}</td>
    <td>{{ $activity->start_time }}</td>
    <td>{{ $activity->end_time }}</td>
    </tr>
  @endforeach
</table>


@stop
