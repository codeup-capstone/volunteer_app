		   	<div class="col-md-10 col-md-offset-2">
		   		<div class="row ">
		   			<div class="col-md-9"><!-- form for editing or creating -->
		   				
		   				<div class="row"><!-- row form for edit fields -->
							<div class="form-group" {{{ $errors->has('name') ? 'has-error' : '' }}}>
								{{ Form::label('name', 'Name') }}
								{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}	
								{{ $errors->first('name', '<p class="help-block">:message</p>') }}
							</div>

							<div class="form-group" {{{ $errors->has('description') ? 'has-error' : '' }}}>
								{{ Form::label('description', 'Description') }}
								{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}	
								{{ $errors->first('description', '<p class="help-block">:message</p>') }}
							</div>

							<div class="form-group" {{{ $errors->has('phone') ? 'has-error' : '' }}}>
								{{ Form::label('phone', 'Phone Number') }}
								{{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}	
								{{ $errors->first('phone', '<p class="help-block">:message</p>') }}
							</div>

							<div class="form-group" {{{ $errors->has('address') ? 'has-error' : '' }}}>
								{{ Form::label('address', 'Address') }}
								{{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}	
								{{ $errors->first('address', '<p class="help-block">:message</p>') }}
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
		   					<div class="col-md-12 ">

		   					</div>
		   				</div>
		   			</div>
   				   				<div class="row">
   				   					<div class="col-md-9">
	   				   					<div class="col-xs-6 col-md-6 equal-height-title column-inner text-center"><!-- cancel buttons -->
	   				   						
	   										<a href="/agencies/create" class="btn btn-danger">Cancel Changes</a>

	   				   					</div>
	   				   					<div class="col-xs-6 col-md-6 equal-height-title column-inner text-center">
	   				   						{{Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
	   										{{ Form::close() }}
	   				   					</div>
   				   					</div>
   				   				</div>
						@unless(empty($agencies->img_url))
							<img scr="{{{ $agency->img_url }}}" alt="{{{ $agency->name }}}">
						@endunless
		   		</div>
		   	</div>             	
