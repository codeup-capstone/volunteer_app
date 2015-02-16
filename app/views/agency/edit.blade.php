@extends('layouts.master')

@section('content')

	{{ Form::model($user, array('action' => array('UsersController@update', $user->id),'method' => 'put', 'files' => true)) }}
	@include('users.form')


@stop