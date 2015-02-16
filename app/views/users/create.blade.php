@extends('layouts.master')

@section('content')

	{{Form::open(array('action' =>'UsersController@store', 'files' => true)) }}
		
	@include('users.form')


</div>


@stop