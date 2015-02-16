@extends('layouts.master')

@section('content')

@forelse ($agencies as $agency)

<div class='main-container'>
	<div class='agencies' id='agencies'>
			<img class="ls-bg" src="{{{ $agency->img_url }}}" alt="">
			{{{ $agency->name }}}
			<a href="{{{ action('AgenciesController@show', $agency->id) }}}"><button class='btn btn-primary' id='display-button'>Display Organization</button></a>
			<a href="{{{ action('AgenciesController@edit', $agency->id) }}}"><button class='btn btn-info' id='edit-button'>Edit Organization</button></a>
			</div>

			<p><h3>{{{ $agency->description }}}</h3></p>

	</div>
</div>

@empty
{{{ "Search not found on the site." }}}
@endforelse


@stop