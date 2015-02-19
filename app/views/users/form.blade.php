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
     		             		<img src="/img/agency/placeholder.jpg">
     		             		<p>Welcome!</p>
     		   	    </div><!--div for profile picture -->
     		   	    			         	
			        <div class="col-md-7 equal-height-title column-inner text-center">
			             	<h3>Fill out the form below to create/update your profile</h3>
			             	
			        </div><!-- VOLUNTEERS-->	
	   	   	    
	 				<div class="row text-center">
	 					<div class="col-md-3">
			 				<div class="form-group" {{{ $errors->has('image') ? 'has-error' : '' }}}>
			 					{{ Form::label('image_url', 'User Image') }}
			 					{{ Form::file('image_url', array('class' => 'form-control')) }}	
			 					{{ $errors->first('image_url', '<p class="help-block">:message</p>') }}
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

									<div class="form-group" {{{ $errors->has('first_name') ? 'has-error' : '' }}}>
										{{ Form::label('first_name', 'First Name') }}
										{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}	
										{{ $errors->first('first_name', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('last_name') ? 'has-error' : '' }}}>
										{{ Form::label('last_name', 'Last Name') }}
										{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}	
										{{ $errors->first('last_name', '<p class="help-block">:message</p>') }}
									</div>
									
									<div class="form-group" {{{ $errors->has('email') ? 'has-error' : '' }}}>
										{{ Form::label('email', 'E-mail') }}
										{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}	
										{{ $errors->first('email', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('password') ? 'has-error' : '' }}}>
										{{ Form::label('password', 'Password') }}
										{{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}	
										{{ $errors->first('password', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('password_confirmation') ? 'has-error' : '' }}}>
										{{ Form::label('password_confirmation', 'Password Confirmation') }}
										{{ Form::password('password_confirmation', Input::old('password_confirmation'), array('class' => 'form-control')) }}	
										{{ $errors->first('password_confirmation', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('profile') ? 'has-error' : '' }}}>
										{{ Form::label('profile', 'About Me') }}
										{{ Form::text('profile', Input::old('profile'), array('class' => 'form-control')) }}	
										{{ $errors->first('profile', '<p class="help-block">:message</p>') }}
									</div>


									<div class="form-group" {{{ $errors->has('phone') ? 'has-error' : '' }}}>
										{{ Form::label('phone', 'Phone Number') }}
										{{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}	
										{{ $errors->first('phone', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('city') ? 'has-error' : '' }}}>
										{{ Form::label('city', 'City') }}
										{{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}	
										{{ $errors->first('city', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('state') ? 'has-error' : '' }}}>
										{{ Form::label('state', 'State') }}
										{{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}	
										{{ $errors->first('state', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('zip') ? 'has-error' : '' }}}>
										{{ Form::label('zip', 'Zip') }}
										{{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}	
										{{ $errors->first('zip', '<p class="help-block">:message</p>') }}
									</div>

									
		   					</div><!-- form for edit fields -->
		   				</div><!-- row form for edit fields -->
		   			</div><!-- form for editing or creating -->
   				   				<div class="row "><!-- cancel and save buttons -->
   				   					<div class="col-md-9 ">
	   				   					<div class="col-xs-6 col-md-6 equal-height-title column-inner text-center column-featured"><!-- cancel buttons -->
	   				   						
	   										<a href="/users/create" class="btn btn-kill btn-featured btn-md raised">Cancel Changes</a>

	   				   					</div><!-- cancel buttons -->
	   				   					<div class="col-xs-6 col-md-6 equal-height-title column-inner text-center column-featured">
	   				   						{{Form::submit('Save Changes', array('class' => "btn btn-featured btn-md buttonStyle raised")) }}
	   										{{ Form::close() }}
	   				   					</div><!-- save buttons -->	
   				   					</div>
   				   				</div><!-- row cancel and save buttons -->
		   			
		   				

						@unless(empty($user->img_url))
							<img scr="{{{ $user->img_url }}}" alt="{{{ $user->title }}}">
						@endunless
		   			

		   		</div>

		   </div>             	
	   

	
	          
	    
	     
	    <!-- / .container -->
   			</div> 
  		</div>



