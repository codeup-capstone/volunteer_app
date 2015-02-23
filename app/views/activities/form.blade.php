<div class="form-group {{{ $errors->has('name') ? 'has-error' : '' }}}">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', Input::old('name'), array('class' => 'form-control','autofocus'=>'autofocus')) }}	
	{{ $errors->first('name', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('description') ? 'has-error' : '' }}}">
	{{ Form::label('description', 'Description') }}
	{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}	
	{{ $errors->first('description', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('event_date') ? 'has-error' : '' }}}">
	{{ Form::label('event_date', 'Event Date') }}
	{{ Form::text('event_date', Input::old('event_date'), array('class' => 'form-control')) }}	
	{{ $errors->first('event_date', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('start_time') ? 'has-error' : '' }}}">
	{{ Form::label('start_time', 'Start Time') }}
	{{ Form::text('start_time', Input::old('start_time'), array('class' => 'form-control')) }}	
	{{ $errors->first('start_time', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('end_time') ? 'has-error' : '' }}}">
	{{ Form::label('end_time', 'End Time') }}
	{{ Form::text('end_time', Input::old('end_time'), array('class' => 'form-control')) }}	
	{{ $errors->first('end_time', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('contact_name') ? 'has-error' : '' }}}">
	{{ Form::label('contact_name', 'Contact Name') }}
	{{ Form::text('contact_name', Input::old('contact_name'), array('class' => 'form-control')) }}	
	{{ $errors->first('contact_name', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('contact_phone') ? 'has-error' : '' }}}">
	{{ Form::label('contact_phone', 'Contact Phone') }}
	{{ Form::text('contact_phone', Input::old('contact_phone'), array('class' => 'form-control')) }}	
	{{ $errors->first('contact_name', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('contact_email') ? 'has-error' : '' }}}">
	{{ Form::label('contact_email', 'Contact E-mail') }}
	{{ Form::text('contact_email', Input::old('contact_email'), array('class' => 'form-control')) }}	
	{{ $errors->first('contact_email', '<p class="help-block">:message</p>') }}
</div>

