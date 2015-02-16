@extends('layouts.master')

@section('content')

<div>
	<div class='main-container'>
		<div class='col-md-12' id='agencies'>
			<ul style="list-style-type:none">
  				<li><h2>{{{ $agency->name }}}</h2></li>
  				<li>{{{ $agency->city }}} &nbsp {{{ $agency->state }}} &nbsp {{{ $agency->zip }}}</li>
  				<li>{{{ $agency->email }}}</li>
  				<li>{{{ $agency->phone }}}</li>
  				<li>{{{ $agency->first_name }}} joined {{{ $agency->created_at->diffForHumans() }}}</li>
  				<li>{{{ $agency->first_name }}}'s profile was updated {{{ $agency->updated_at->diffForHumans() }}}</li>
			</ul>
				
			<p><h3>{{{ $agency->description }}}</h3></p>
			@if (Auth::check())
		
			<a href="{{{ action('AgenciesController@edit', $agency->id) }}}"><button class='btn btn-info' id='edit-button'>Edit agency</button></a>

			{{ Form::open(array('action' => array('AgenciesController@destroy', $agency->id), 'method' => 'delete')) }}
				{{ Form::submit('Delete Organization', array('class' => 'btn btn-danger', 'id' => 'delete-button')) }}
			{{ Form::close() }}

			</div>
</div>
	@endif

	@if (Auth::guest())
		<h2>Welcome Guest!</h2>
	@endif
</div>
	

<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-12 ">       
	       	<div class="row"> <!-- profile info bar -->           	
 				   <div class="col-md-2 embed-responsive-4by3">
 		             		<img src="/bedifferent/theme/assets/images/people/kathy.jpg">
 		   	       </div><!--div for profile picture -->
		     		<div class="section">
				        <div class="half-row col-md-6">
			             	<div class="equal-height-title column-inner text-center">
			             		<h3>{{{$agency->first_name." ".$agency->last_name}}}</h3>
			             	</div><!-- AGENCY NAME-->
				         	<div class="half-row">
					            <div class="col-md-6 equal-height-text column-inner text-center">
					             	<h5>PAST EVENTS</h5>
					             </div> <!-- PAST EVENTS-->     
					             <div class="col-md-6 equal-height-title column-inner text-center">
					             	<h5>FUTURE EVENTS</h5>
					             </div><!-- RSVP COUNT-->	
			         		</div><!-- usr rsvps data -->
				        </div>  <!-- top half row section-->   
	         		</div><!-- left third of profile infobar -->
			        		
		     	
			        
			        <div class="col-md-4">
		   	        	<nav id="nav" role="navigation">
				            <ul>
				              <li class="active has-children"><a href="#"> Profile</a>
				              
				                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
				                    <ul>
				                      
				                      <li>Address:<p>{{{$agency->city}}}</p></li>
				                      <li>Number:<p>{{{$agency->phone}}}</p></li>
				                      <li>Email:<p>{{{$agency->email}}}</p></li>
				                    </ul>
				                  </li>          
				              
				            </ul> <!-- summary of AGENCY PROFILE -->
			          	</nav>
				   	</div>
	   			   
	   			  
	   	   	    
			</div><!--TOP SECTION OF AGENCY PROFILE BREAKDOWN-->
		   </div>             	
	   

	    	<div class="col-md-12">
		     <div class="row">

	    		<div class="col-md-12 text-center">	
			     	<h1>ORGANIZATION RSVP EVENTS GO IN HERE</h1>
			     	<h1>ORGANIZATION RSVP EVENTS GO IN HERE</h1>
			     	<h1>ORGANIZATION RSVP EVENTS GO IN HERE</h1>
			     	<h1>ORGANIZATION RSVP EVENTS GO IN HERE</h1>
		     	</div><!-- table of events -->
      		</div><!-- row that contains rsvp and all data -->
		     

	        <!--/.col-x-x-->
	        <hr class="visible-xs vertical-spacer vertical-spacer-xs">
	     
	       
	          
	    
	      <!-- VERTICAL SPACING -->
	      <hr class="vertical-spacer vertical-spacer-lg"> 
	    <!-- / .container -->
   			</div> 
  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
	</div>
</div>
<!-- ================== END #page ================= --> 

@stop
