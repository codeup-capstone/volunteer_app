@extends('layouts.master')

@section('content')


<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
	<div class="container no-gutters">
	  
	  <!-- .container for entire page --> 
	  
	  <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
	  
	  <!-- .row .sixteen-gutter --> 
	  
			<div class="col-md-12">
			
			  
				<div class="col-md-3">	            
					 <div class="row no-gutters" id="sidebar">
						
							<div class=" embed-responsive-4by3 img-size img-size-mobile">
								
									<img class="img-size" src="/img/agency/{{ $activity->agency->image_name }}">
								
							</div><!--div for logo -->
							<br>
							<div class="hidden-xs hidden-sm embed-responsive-4by3">
								<a href="http://maps.google.com/?daddr={{ $activity->location->address }}+{{ $activity->location->city }}+{{ $activity->location->state }}"><img class="img-size" src="/img/agency/maps/{{ $activity->agency->id }}.png"></a>
							</div><!--div for logo -->
							
					</div>  
			   </div>
			 
			   
		  
				
			<div class="col-md-6">
					<div class="row">
						<!-- <div class="col-md-8 equal-height-text column-inner text-center">
							<h3>Event Name</h3>
						</div> -->    <!-- event section-->  
						<div class="col-md-12 equal-height-title column-inner raised">
							<nav id="nav" role="navigation">
								<ul>
									<li class="active has-children"><a  href="/agencies/{{ $activity->agency->id }}"><h3>{{ $activity->name }}</h3></a>


											 
												<ul>
												  <li class="dropmenuItems"><span>Description:</span> {{ $activity->description }}</li>
												  <li class="dropmenuItems"><span>Max Volunteers:</span> {{ $activity->max_volunteers }}</li>
												  <li class="dropmenuItems"><span>Staff:</span> {{ $activity->contact_name }}</li>
												  <li class="dropmenuItems"><span>Contact Number:</span> {{ preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $activity->contact_phone) }}</li>
												  <li class="dropmenuItems"><span>Min Age:</span> {{ $activity->min_age }}</li>
												</ul>
										   </li>          
										  
								</ul> <!-- summary of event -->
							  </nav>
							@if (Auth::check())
								@if($activity->users->contains(Auth::id()))
									<strong>You are attending this event!</strong>
								@endif
							@endif

						</div><!-- hosted section-->
							
					</div><!-- bottem half row section-->
					 
					 <div class="row">
						<div class="col-xs-12 col-md-12 no-gutters">
						   <div>
						   
							 <h3 class="column-inner text-center"> <a  href="{{{ action('AgenciesController@show', $activity->agency->id) }}}">{{ $activity->agency->name }}</a></h3>
							  
						   </div>

						</div>
						
					 </div><!-- middle third of  section-->
					
					<div class="half-row no-gutters">
						<div class="col-md-6  equal-height-title column-inner text-center " id="matchSiblingHeight">
							<h5>When</h5>
							<p>{{{ date('D, M d',strtotime($activity->event_date)) }}} at {{{ date('g:i A',strtotime($activity->start_time)) }}}</p>
						</div><!-- date section-->
						<div class="col-md-6 equal-height-title column-inner text-center " id="location" >
							<h5>Where</h5>
							<a href="http://maps.google.com/?daddr={{ $activity->location->address }}+{{ $activity->location->city }}+{{ $activity->location->state }}">
								<p>{{ $activity->location->address }}<br>
									{{ $activity->location->city }}, 
									{{ $activity->location->state }} 
									{{ $activity->location->zip }}</p></a>	<!--table data will go here with some blade sytax -->
						</div>	
					</div>  <!-- top half row section-->   
					
			   

			  
		  
				<div class="half-row no-gutters">
					<div>
						<div class="col-xs-12 col-md-12 raised column-inner text-center" id="emailButton">
							<a href="mailto:{{$activity->contact_email}}" rel="external"><img  src="/img/icons/envelope32.png"></a><!--table data will go here with some blade sytax -->
						</div>



						
					</div>
				</div> <!-- address section-->
				 
			 </div><!-- top third of  section-->
		<!-- primary columnsection col-md-9 -->
	
 
		<!--/.col-x-x-->
		
		<!-- add some vertical spacing when stacked -->
		
			<div class="col-md-3">
			
				  <div class="col-md-12 column-inner column-featured text-center">
					<h3>
						@if (Auth::check())
							<!-- Check if RSVP already exists for this user and this event -->
							@if(!$activity->users->contains(Auth::id()))
								<a class="btn btn-featured btn-lg buttonStyle raised" href="{{ action('RSVPController@create', $activity->id) }}">RSVP</a>

							@else
								<!-- Allow user to cancel RSVP if record exists -->
								<a class="btn btn-featured btn-lg raised button-cancel"  href="{{ action('RSVPController@destroy', $activity->id) }}">Cancel RSVP</a>
							@endif
						@else
							<!-- Make user login if not signed in -->
							<a class="btn btn-featured btn-lg buttonStyle raised" href="#" data-slide="slide" data-target="#login-panel">Sign in to RSVP</a>
						@endif

					</h3>
						 
				  </div>
				  <!--/.column-inner .column-featured-->
			  
				

			   
				<div class="col-md-12 column-inner column-featured text-center">
					<h3><a class="btn btn-featured btn-lg buttonStyle raised"  href="{{{ action('ActivitiesController@showRandom') }}}">NEXT</a></h3>
				</div>
				  <!--/.column-inner .column-featured-->
			   
				
			   
				  <div class="col-md-12 column-inner column-featured text-center">
					<h3><a class="btn btn-featured btn-lg buttonStyle raised" href="{{{ action('HomeController@showHome') }}}">HOME</a></h3>
						 
				  </div>

				<!-- Need some sort of if statement here -->
				@if ($activity->agency->users->contains(Auth::user()))
				<div class="col-md-12 column-inner column-featured text-center">
					<h3><a class="btn btn-featured btn-lg buttonStyle raised"  href="{{{ action('ActivitiesController@edit', $activity->id) }}}">Edit Event</a></h3>
				</div>
				@endif

				
			</div><!-- single sidebar section-->
			 
			
			
		</div><!-- id sidebar section-->
		
	  </div><!-- row that contains rsvp and all data -->
		  
	
	  <!-- VERTICAL SPACING -->
	  <hr class="vertical-spacer vertical-spacer-lg"> 
	<!-- / .container -->
   
  </div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->
</div>

<!-- ================== END #page ================= --> 


@stop
