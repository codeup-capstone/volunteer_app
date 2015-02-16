@extends('layouts.master')

@section('content')

	{{Form::open(array('action' =>'UsersController@store', 'files' => true)) }}
		
	@include('users.form')

	{{Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}

</div>


@stop