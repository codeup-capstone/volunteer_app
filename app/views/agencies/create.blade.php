@extends('layouts.master')

@section('content')

	{{Form::open(array('action' =>'AgenciesController@store', 'files' => true)) }}
		
	@include('agencies.form')

@stop