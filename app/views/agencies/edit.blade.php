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
     		            <img src="/img/agency/{{{ $agency->image_name }}}" alt="{{{ $agency->name }}}"  width="250">
     		             	<p>Welcome!</p>
     		             </img>
     		   	    </div><!--div for profile picture -->
     		   	    			         	
			        <div class="col-md-7 equal-height-title column-inner text-center">
			             	<h3>Fill out the form below to create your Profile</h3>
			             	
			        </div><!-- VOLUNTEERS-->	
	   	   	    
	 				<div class="row text-center">
	 					<div class="col-md-3">
			 				<div class="form-group" {{{ $errors->has('image') ? 'has-error' : '' }}}>
			 					{{ Form::label('image', 'Agency Image') }}
			 					{{ Form::file('image', array('class' => 'form-control')) }}	
			 					{{ $errors->first('image', '<p class="help-block">:message</p>') }}
			 				</div>
	 					</div>
	 				</div>
			</div><!--ADMIN INFO BAR -->
		   </div><!-- first div col-md-12 -->
	@include('agencies.form')

@stop