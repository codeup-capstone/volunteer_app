@extends('layouts.master')

@section('content')

	<div>
		<div class='main-container'>
			<div class='col-md-12' id='agencies'>					
				
				@if (Auth::check())
			
				<a href="{{{ action('AgenciesController@edit', $agency->id) }}}"><button class='btn btn-info' id='edit-button'>Edit agency</button></a>

				{{ Form::open(array('action' => array('AgenciesController@destroy', $agency->id), 'method' => 'delete')) }}
					{{ Form::submit('Delete Organization', array('class' => 'btn btn-danger', 'id' => 'delete-button')) }}
				{{ Form::close() }}

				@endif
			</div>
		</div>
	</div>

	{{ Form::model($agency, array('action' => array('AgenciesController@update', $agency->id),'method' => 'put', 'files' => true)) }}
	@include('agencies.form')

@stop