@extends('layouts.master')

@section('content')

	{{ Form::model($agency, array('action' => array('AgenciesController@update', $agency->id),'method' => 'put', 'files' => true)) }}
	@include('agencies.form')

@stop