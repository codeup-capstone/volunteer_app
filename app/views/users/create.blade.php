@extends('layouts.master')

@section('content')
<div class="col-md-3">
</div>
<div class="col-md-6">
    <h4 class="text-center clear"><br>Welcome to Serve Search!</h4>
        
          <p class="text-center clear">Update your profile. <a class="link-underline login-toggle" href="{{{ action('UsersController@create') }}}" data-slide="slide" data-target="#login-panel">Edit </a></p>
          <p class="text-center clear">Great opportunities are waitng for you. <a class="link-underline login-toggle" href="{{{ action('UsersController@create') }}}" data-slide="slide" data-target="#login-panel">Login</a></p>
</div>


@stop