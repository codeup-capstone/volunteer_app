@extends('layouts.master')

@section('content')



<div id="page" >
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      

		   
		   <div class="col-md-12">
		   		<div class="row ">
		   			<div class="col-md-8 column-inner raised"><!-- form for editing or creating -->
		   				<div class="row"><!-- row form for edit fields -->
		   						<h1 class="column-inner text-center">Edit Event</h1>
								{{ Form::model($activity, array('action' => array('ActivitiesController@update', $activity->id), 'method' => 'put', 'files' => true)) }}

									@include('activities.form')

								{{ Form::submit('Update Event', array('class' => 'btn btn-primary')) }}
								{{ Form::close() }}

								{{ Form::open(array('action'=> array('ActivitiesController@destroy', $activity->id), 'method' => 'delete')) }}
								{{ Form::submit('Delete Event', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}

		   				</div><!-- row form for edit fields -->
		   			</div><!-- form for editing or creating -->
		   			<div class="col-md-1"></div>
		   			<div class="col-md-3">
					 	<div class="row no-gutters" id="sidebar">
						
							<div class=" embed-responsive-4by3">
								<img class="img-size" src="/img/agency/{{ $activity->agency->image_name }}">
							</div><!--div for logo -->
							<br>
							<div class="hidden-xs hidden-sm embed-responsive-4by3">
								<a href="http://maps.google.com/?daddr={{ $activity->location->address }}+{{ $activity->location->city }}+{{ $activity->location->state }}"><img class="img-size" src="/img/agency/maps/{{ $activity->agency->id }}.png"></a>
							</div><!--div for logo -->
							
						</div>  
		   			</div>
		   		</div>

		   </div>             	
	   

	
	          
	    
	     
	    <!-- / .container -->
   			</div> 
  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 

@stop
