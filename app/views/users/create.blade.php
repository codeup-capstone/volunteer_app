@extends('layouts.master')

@section('content')

	
	<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters ">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-12 ">       
	       	<div class="row no-gutters"> <!-- profile info bar -->           	
 				   	<div class="text-center col-md-3 embed-responsive-4by3">
     		             		@if(file_exists('$user->image_url'))
     		             			<img src="{{{ $user->image_url }}}">
     		             		@else 
     		             			<img src="/img/user/placeholder.jpg">
     		             		@endif

     		             		<p>Welcome!</p>
     		   	    </div><!--div for profile picture -->
     		   	    			         	
			        <div class="col-md-7 equal-height-title column-inner text-center">
			             	<h3>Fill out the form below to create your profile</h3>
			             	
			        </div><!-- VOLUNTEERS-->	
	   	   	    
	 				<div class="row text-center">
	 					<div class="col-md-3">
							{{Form::open(array('action' =>'UsersController@store', 'files' => true)) }}
			 				<div class="form-group" {{{ $errors->has('image') ? 'has-error' : '' }}}>
			 					{{ Form::label('image_url', 'User Image') }}
			 					{{ Form::file('image_url', array('class' => 'form-control')) }}	
			 					{{ $errors->first('image_url', '<p class="help-block">:message</p>') }}
			 				</div>
	 					</div>
	 				</div>
			</div><!--ADMIN INFO BAR -->
		   </div><!-- first div col-md-12 -->
		   
		   <div class="col-md-10 col-md-offset-2">
		   		<div class="row ">
		   			<div class="col-md-9"><!-- form for editing or creating -->
		   				
		   				<div class="row"><!-- row form for edit fields -->
		   					<div class="col-md-12 ">
									<div class="form-group" {{{ $errors->has('email') ? 'has-error' : '' }}}>
										{{ Form::label('email', 'E-mail') }}
										{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}	
										{{ $errors->first('email', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('password') ? 'has-error' : '' }}}>
										{{ Form::label('password', 'Password') }}
										{{ Form::password('password', array('class' => 'form-control')) }}	
										{{ $errors->first('password', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('password_confirmation') ? 'has-error' : '' }}}>
										{{ Form::label('password_confirmation', 'Password Confirmation') }}
										{{ Form::password('password_confirmation', array('class' => 'form-control')) }}	
										{{ $errors->first('password_confirmation', '<p class="help-block">:message</p>') }}
									</div>


	@include('users.form')


</div>


@stop