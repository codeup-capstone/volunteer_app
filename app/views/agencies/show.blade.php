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

			</div>
</div>
	@endif

	@if (Auth::guest())
		<p>Welcome {{{$agency->name}}}</p>
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
 		   	      		<img class="img-size" src="/img/agency/{{{ $agency->image_name }}}" alt="{{{ $agency->name }}}">
 		   	       </div><!--div for profile picture -->
		     		<div class="section">
				        <div class="half-row col-md-6">
			             	<div class="equal-height-title column-inner text-center">
			             		<h5>{{{ $agency->name }}}</h5>
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
				                      
				                     <li>Address:{{{ $agency->city }}} &nbsp {{{ $agency->state }}} &nbsp {{{ $agency->zip }}}</li>
				                     <li>Number:<p>{{{$agency->phone}}}</p></li>
				                     <li>Email:<p>{{{$agency->email}}}</p></li>
				                     <li><p class="summary">{{{ $agency->description }}}</p></li>
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
			     	<table class="table table-striped table-hover">
			     	    <tr>
			     	      <th>Event Name</th>
			     	      <th>Organization</th>
			     	      <th>Event Date</th>
			     	      <th>Start Time</th>
			     	      <th>End Time</th>
			     	    </tr>
			     	  @foreach ($activities as $activity)
			     	    <tr>
			     	    <td><a href="{{{ action('ActivitiesController@show', $activity->id) }}}">{{ $activity->name }}</a></td>
			     	    <td>
			     	      {{ $activity->agency->name }}
			     	    </td>
			     	    <td>{{ $activity->event_date }}</td>
			     	    <td>{{ $activity->start_time }}</td>
			     	    <td>{{ $activity->end_time }}</td>
			     	    </tr>
			     	  @endforeach
			     	</table>
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
