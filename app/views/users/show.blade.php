@extends('layouts.master')

@section('content')

<div>
	<div class='main-container'>
		<div class='users' id='users'>
			<h2>{{{ $user->first_name }}} &nbsp {{{ $user->last_name }}}</h2>
			<div class='create-update'>
				profile updated [{{{ $user->updated_at->diffForHumans() }}}]&nbsp
				joined [{{{ $user->created_at->diffForHumans() }}}]</p>
			</div>
				<h5>posted by: {{{ $post->user->email }}}</h5>
			<p><h3>{{{ $post->body }}}</h3></p>
			@if (Auth::check())
		
			<a href="{{{ action('PostsController@edit', $post->id) }}}"><button class='btn btn-info' id='edit-button'>Edit Post</button></a>

			{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete')) }}
				{{ Form::submit('Delete Post', array('class' => 'btn btn-danger', 'id' => 'delete-button')) }}
			{{ Form::close() }}

			</div>
</div>
	@endif

	@if (Auth::guest())
		<h2>Welcome Guest!</h2>
	@endif
</div>
	


@stop