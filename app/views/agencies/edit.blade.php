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
		   					<table width="100%">
		   						<td>
		   						<h1 class="column-inner text-center">Edit Agency</h1>
								{{ Form::model($agency, array('action' => array('AgenciesController@update', $agency->id), 'method' => 'put', 'files' => true)) }}
								</td>
								<td>
								<img class="img-size" src="/img/agency/{{ $agency->image_name }}">
								</td>
							</table>

									@include('agencies.form')
							<table width="100%">
								<td>
								{{ Form::submit('Update Agency', array('class' => 'btn btn-primary')) }}
								{{ Form::close() }}
								</td>
								<td>
								{{ Form::open(array('action'=> array('AgenciesController@destroy', $agency->id), 'method' => 'delete')) }}
								{{ Form::submit('Delete Agency', array('class' => 'btn btn-danger')) }}
								{{ Form::close() }}
								</td>
							</table>

		   				</div><!-- row form for edit fields -->
		   			</div><!-- form for editing or creating -->
		   			<div class="col-md-1"></div>
		   			<div class="col-md-3">
					 	<div class="row no-gutters" id="sidebar">
						
							<div class=" embed-responsive-4by3">
								<img class="img-size" src="/img/agency/{{ $agency->image_name }}">
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
