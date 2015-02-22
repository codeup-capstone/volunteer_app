@extends('layouts.master')

@section('content')

	{{Form::open(array('action' =>'AgenciesController@store', 'files' => true)) }}
		
<div id="page">
  	<div class="page-content" role="main">
    	<div class="container no-gutters ">	      
	       	<div class="col-md-12 ">       
	       		<div class="row no-gutters"> <!-- profile info bar --> 
	       			<div class="text-center col-md-3 embed-responsive-4by3">
     		            {{-- <img src="/img/agency/{{{ $agency->image_name }}}" alt="{{{ $agency->name }}}"  width="250"> --}}
     		             	<p>Welcome!</p>
     		           	{{-- </img> --}}
     		   	    </div>
     		   	    			         	
			        <div class="col-md-7 equal-height-title column-inner text-center">
			            <h3>Fill out the form below to create your Profile</h3>
			        </div>	
	   	   	    
	 				<div class="row text-center">
	 					<div class="col-md-3">
			 				<div class="form-group" {{{ $errors->has('image') ? 'has-error' : '' }}}>
			 					{{ Form::label('image', 'Agency Image') }}
			 					{{ Form::file('image', array('class' => 'form-control')) }}	
			 					{{ $errors->first('image', '<p class="help-block">:message</p>') }}
			 				</div>
	 					</div>
	 				</div>
				</div>
		   </div>
		   
@include('agencies.form')

@stop