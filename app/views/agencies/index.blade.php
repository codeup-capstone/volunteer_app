@extends('layouts.master')

@section('content')

<div class='main-container'>
	<div class='agencies' id='agencies'>
		<table class="table table-striped table-hover">
		    <tr>
		    	<th></th>
		    	<th>Agency Name</th>
		    	<th>Category</th>
		    	<th></th>
		    </tr>

@forelse ($agencies as $agency)
<tr>
	<td><img height="80" src="/img/agency/{{{ $agency->image_name }}}"></td>
	<td>
	<a href="{{{ action('AgenciesController@show', $agency->id) }}}">
		{{{ $agency->name }}}</a><br>
		{{{ $agency->address }}}<br>
		{{{ $agency->city }}}, {{{ $agency->state }}} {{{ $agency->zip }}}
	
	</td>
	<td>{{{ $agency->category->category }}}</td>
	<td>
	<a href="{{{ action('AgenciesController@edit', $agency->id) }}}"><button class='btn btn-info' id='edit-button'>Edit Organization</button></a>
	</td>
</tr>


@empty
{{{ "Search not found on the site." }}}
@endforelse

		</table>
	</div>
</div>

@stop