<div class="form-group" {{{ $errors->has('name') ? 'has-error' : '' }}}>
	{{ Form::label('name', 'Agency Name') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}	
	{{ $errors->first('name', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group" {{{ $errors->has('headline') ? 'has-error' : '' }}}>
	{{ Form::label('headline', 'Headline') }}
	{{ Form::text('headline', Input::old('headline'), array('class' => 'form-control')) }}	
	{{ $errors->first('headline', '<p class="help-block">:message</p>') }}
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

<div class="form-group" {{{ $errors->has('website') ? 'has-error' : '' }}}>
	{{ Form::label('website', 'Website') }}
	{{ Form::text('website', Input::old('website'), array('class' => 'form-control')) }}	
	{{ $errors->first('website', '<p class="help-block">:message</p>') }}
</div>

