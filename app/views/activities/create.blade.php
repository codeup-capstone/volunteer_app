@extends('layouts.master')

@section('content')



<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
		   
		   <div class="col-md-12">
		   		<div class="row ">
		   			<div class="col-md-offset-2 col-md-8  column-inner text-center" id="tableTitle"><!-- form for editing or creating -->


		   						<h3>Create New Event</h3>
		   				
		   			</div><!-- form for editing or creating -->
		   			

		   			<div class="col-md-8"><!-- events table  -->
					 	<div class="row no-gutters" id="sidebar">
		   						{{ Form::open(array('action' => 'ActivitiesController@store', 'files' => true)) }}

									@include('activities.form')

								{{ Form::submit('Create New Event', array('class' => "btn btn-featured btn-md buttonStyle raised")) }}
								{{ Form::close() }}

						
							
						</div>  
		   			</div><!-- events table-->
		   		</div>

		   </div>             	
	   

	
	          
	    
	     
	    <!-- / .container -->
   			</div> 
  		</div>
  <!-- /.page-content role=main --> 
  <!--=========== END CONTENT FOR THE PAGE ============================================================ -->


<!-- ================== END #page ================= --> 

@stop
