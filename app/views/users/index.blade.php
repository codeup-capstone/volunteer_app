@extends('layouts.master')

@section('content')

@if (Auth::check())

@forelse ($users as $user)

<div class='main-container'>
	<div class='users' id='users'>
			<img class="ls-bg" src="{{{ $user->img_url }}}" alt="">
			{{{ $user->first_name }}} &nbsp {{{ $user->last_name }}}
			<a href="{{{ action('UsersController@show', $user->id) }}}"><button class='btn btn-primary' id='display-button'>Display User</button></a>
			<a href="{{{ action('UsersController@edit', $user->id) }}}"><button class='btn btn-info' id='edit-button'>Edit User</button></a>
			</div>

			<p><h3>{{{ $user->description }}}</h3></p>

	</div>
</div>

@empty
{{{ "Search not found on the site." }}}
@endforelse

@endif


@stop