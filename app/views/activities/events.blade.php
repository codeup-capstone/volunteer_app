@extends('layouts.master')

@section('content')

<table class="table table-striped table-hover">
    <tr>
      <th>Event Name</th>
      <th>Organization</th>
      <th>Event Date</th>
    </tr>
  @foreach ($activities as $activity)
    <tr>
    <td><a href="{{{ action('ActivitiesController@show', $activity->id) }}}">{{ $activity->name }}</a></td>
    <td>{{ $activity->agency }}</td>
    <td>{{ $activity->date }}</td>
    </tr>
  @endforeach
</table>


@stop
