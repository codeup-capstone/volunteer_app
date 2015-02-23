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
		   			<div class="col-md-8 column-inner raised"><!-- form for editing or creating -->

		   				<div class="row"><!-- row form for edit fields -->
		   					<div class="col-md-12 ">

		   						<h1 class="column-inner text-center">Create New Agency</h1>
		   						
		   						{{ Form::open(array('action' => 'AgenciesController@create', 'files' => true)) }}

									<div class="form-group {{{ $errors->has('image_name') ? 'has-error' : '' }}}">
										{{ Form::label('image_name', 'Agency Image', array('class'=> 'some-class')) }}
										{{ Form::file('image_name', array('class' => 'form-control')) }}
										{{ $errors->first('image_name', '<span class="help-block">:message</span>') }}
									</div>


									@include('agencies.form')

								{{ Form::submit('Create New Agency', array('class' => 'btn btn-primary')) }}
								{{ Form::close() }}

		   					</div><!-- form for edit fields -->
		   				</div><!-- row form for edit fields -->
		   			</div><!-- form for editing or creating -->
		   			<div class="col-md-4"><!-- events table  -->
					 	<div class="row no-gutters" id="sidebar">
						
							
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
