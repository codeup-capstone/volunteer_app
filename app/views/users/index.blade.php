@extends('layouts.master')

@section('content')

<div class='main-container'>
	<div class='posts' id='posts'>
		<h2>
			<img class="ls-bg" src="{{{ $user->img_url }}}" alt="">
			<strong>
				{{{ $user->first_name }}} &nbsp {{{ $user->first_name }}}
			</strong>
		</h2>

			<div class='create-update'>
				<p>
					user updated [{{{ $user->updated_at->diffForHumans() }}}]&nbsp
					joined [{{{ $user->created_at->diffForHumans() }}}]
				</p>
			</div>

			<p><h3>{{{ $user->description }}}</h3></p>

			<a href="{{{ action('UsersController@show', $post->id) }}}"><button class='btn btn-primary' id='display-button'>Display User</button></a>
			<a href="{{{ action('UsersController@edit', $post->id) }}}"><button class='btn btn-info' id='edit-button'>Edit User</button><br></a>
	</div>
</div>

@empty
{{{ "Search not found on the site." }}}
@endforelse

<div class='text-center'>
	{{ $users->appends(array('search' => Input::get('search')))->links()}}
</div>



@stop