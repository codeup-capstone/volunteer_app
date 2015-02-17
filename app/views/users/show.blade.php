@extends('layouts.master')

@section('content')

<div>
	<div class='main-container'>
		<div class='col-md-12' id='users'>
			
  				
  				
  			
			
				
			
			@if (Auth::check())
		
			<a href="{{{ action('UsersController@edit', $user->id) }}}"><button class='btn btn-info' id='edit-button'>Edit User</button></a>

			{{ Form::open(array('action' => array('UsersController@destroy', $user->id), 'method' => 'delete')) }}
				{{ Form::submit('Delete User', array('class' => 'btn btn-danger', 'id' => 'delete-button')) }}
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
			             		<h3>{{{$user->first_name." ".$user->last_name}}}</h3>
			             		<p>{{{ $user->description }}}</p>
			             	</div><!-- USER NAME-->
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
				                      
				                      <li>Address:<p>{{{$user->city}}}</p></li>
				                      <li>Number:<p>{{{$user->phone}}}</p></li>
				                      <li>Email:<p>{{{$user->email}}}</p></li>
				                      <li>{{{ $user->first_name }}} joined {{{ $user->created_at->diffForHumans() }}}</li>
				                    </ul>
				                  </li>          
				              
				            </ul> <!-- summary of USER PROFILE -->
			          	</nav>
				   	</div>
	   			   
	   			  
	   	   	    
			</div><!--TOP SECTION OF USER PROFILE BREAKDOWN-->
		   </div>             	
	   

	    	<div class="col-md-12">
		     <div class="row">

	    		<div class="col-md-12 text-center">	
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
			     	<h1>USERS RSVP EVENTS GO IN HERE</h1>
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
