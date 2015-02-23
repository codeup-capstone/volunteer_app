<div id="page">
  <!-- =========== BEGIN CONTENT FOR THE PAGE =========================================================================== -->
  <div class="page-content" role="main">
    <div class="container no-gutters ">
      
      <!-- .container for entire page --> 
      
      <!-- uses bigtext.js plugin AND clever use of the responsive utilities and the grid // unless you use the same character count, the results will vary -->
   
     
      
	      <!-- .row .sixteen-gutter --> 
	      <!-- <div class="row sixteen-gutter"> -->
	      
	       <div class="col-md-12 ">       
	       		<div class="row no-gutters"> <!-- profile info bar --> 
	       			<div class="text-center col-md-3 embed-responsive-4by3">
     		             	<p>Welcome!</p>
     		             </img>
     		   	    </div><!--div for profile picture -->
     		   	    			         	
			        <div class="col-md-7 equal-height-title column-inner text-center">
			             	<h3>Fill out the form below to create your Profile</h3>
			             	
			        </div><!-- VOLUNTEERS-->	
	   	   	    
	 				<div class="row text-center">
	 					<div class="col-md-3">
			 				<div class="form-group" {{{ $errors->has('image') ? 'has-error' : '' }}}>
			 					{{ Form::label('image', 'Agency Image') }}
			 					{{ Form::file('image', array('class' => 'form-control')) }}	
			 					{{ $errors->first('image', '<p class="help-block">:message</p>') }}
			 				</div>
	 					</div>
	 				</div>
			</div><!--ADMIN INFO BAR -->
		   </div><!-- first div col-md-12 -->
		   
		   <div class="col-md-10 col-md-offset-2">
		   		<div class="row ">
		   			<div class="col-md-9"><!-- form for editing or creating -->
		   				
		   				<div class="row"><!-- row form for edit fields -->
		   					<div class="col-md-12 ">
		   					</div><!-- form for edit fields -->
		   				</div><!-- row form for edit fields -->
		   			</div><!-- form for editing or creating -->
   				   				<div class="row"><!-- cancel and save buttons -->
   				   					<div class="col-md-9">
	   				   					<div class="col-xs-6 col-md-6 equal-height-title column-inner text-center"><!-- cancel buttons -->
	   				   						
	   										<a href="/agencies/create" class="btn btn-danger">Cancel Changes</a>

	   				   					</div><!-- cancel buttons -->
	   				   					<div class="col-xs-6 col-md-6 equal-height-title column-inner text-center">
	   				   						{{Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
	   										{{ Form::close() }}
	   				   					</div><!-- save buttons -->	
   				   					</div>
   				   				</div><!-- row cancel and save buttons -->
		   			
		   				

						@unless(empty($agencies->img_url))
							<img scr="{{{ $agency->img_url }}}" alt="{{{ $agency->name }}}">
						@endunless
		   			

		   		</div>

		   </div>             	
	   

	
	          
	    
	     
	    <!-- / .container -->
   			</div> 
  		</div>