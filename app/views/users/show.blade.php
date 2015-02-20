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

			@endif
			</div>
</div>

	
</div>
	

<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-12 ">       
	       	<div class="post person"> <!-- profile info bar -->           	
 				   <div class="col-md-2 embed-responsive-4by3">
 				   			<div class="image">
 		             			<img src="{{{ $user->image_url }}}">
 				   			</div>
 		   	       </div><!--div for profile picture -->

		     		<div class="section">
				        <div class="half-row col-md-10 no-gutters">
			             	<div class="equal-height-title column-inner raised ">
			             		<h3 class="text-center">{{{$user->first_name." ".$user->last_name}}}</h3>
			             		<p>{{{ $user->description }}}</p>
					   	        	<nav id="nav" role="navigation">
							            <ul>
							              <li class="active has-children raised"><a href="#"> click for profile summary</a>
							              
							                  <!-- <li class="has-children"> <a href="#">Find Events</a> -->
							                    <ul class="dropmenuItems">
							                      
							                      <li><span>Address:</span> {{{$user->city}}}</li>
							                      <li><span>Number:</span> {{{ preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $user->phone) }}}</li>
							                      <li><a class="raised" data-hover="tooltip" data-placement="left" title="Click to email" href="mailto:{{{ $user->email }}}">Email: {{$user->email}}</a></li>

							                      <li>{{{ $user->first_name }}} joined {{{ $user->created_at->diffForHumans() }}}</li>
							                    </ul>
							               </li>          
							              
							            </ul> <!-- summary of USER PROFILE -->
						          	</nav>
							   	</div>
				         	<div class="half-row no-gutters">
					            <div class="col-md-6  equal-height-text column-inner text-center">
					             	<h5>PAST EVENTS</h5>
					             </div> <!-- PAST EVENTS-->     
					             <div class="col-md-6 equal-height-title column-inner text-center">
					             	<h5>FUTURE EVENTS</h5>
					             </div><!-- RSVP COUNT-->	
			         		</div><!-- usr rsvps data -->
			             	</div><!-- USER NAME-->
				        </div>  <!-- top half row section-->   
	         		</div><!-- left third of profile infobar -->
			        		
		     	
			        
			        <div class="col-md-4">
	   			   
	
	   	   	    
			</div><!--TOP SECTION OF USER PROFILE BREAKDOWN-->
		   </div>             	
	   

	    	<div class="col-md-12">
		     <div class="row no-gutters">

	    		<div class="col-md-12 ">	
			     		<table class="table table-striped table-hover" id="clickableRow">
	             		    <tr class="text-center">
	             		    	<th class="hidden">&nbsp</th> 
	             		    	<th>Agency</th>
	             		    	<th>Event Date</th>
	             		    	<th>Contact</th>
	             		    	
	             		    </tr>

	             				@foreach($user->activities as $activity)
         					<tr class=" raised">
         							<td class="hidden"><a href="{{{ action('ActivitiesController@show', $activity->id) }}}">></a></td>
	         						<td>{{{ $activity->name }}}</a></td>
	         						<td>{{{ $activity->event_date }}}</a></td>
         							<td>{{{ $activity->contact_name }}}</a></td>
	         						
	         						
         						
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
