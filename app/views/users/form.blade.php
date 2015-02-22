
									<div class="form-group" {{{ $errors->has('first_name') ? 'has-error' : '' }}}>
										{{ Form::label('first_name', 'First Name') }}
										{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control','autofocus'=>'autofocus')) }}	
										{{ $errors->first('first_name', '<p class="help-block">:message</p>') }}
									</div>

									<div class="form-group" {{{ $errors->has('last_name') ? 'has-error' : '' }}}>
										{{ Form::label('last_name', 'Last Name') }}
										{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}	
										{{ $errors->first('last_name', '<p class="help-block">:message</p>') }}
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
	   				   						
	   										<a href="/users/create" class="btn btn-kill btn-featured btn-md button-cancel raised">Cancel Changes</a>

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



