
{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}

    <!-- Name -->
  <!--  <div class="control-group {{{ $errors->has('mail') ? 'error' : '' }}}">
        {{ Form::label('mail', 'Mail', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::text('mail', Input::old('mail')) }}
            {{ $errors->first('mail') }}
        </div>
    </div> -->

    <!-- Password -->
    <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
        {{ Form::label('password', 'Password', array('class' => 'control-label')) }}

        <div class="controls">
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </div>
    </div>

    <!-- Login button -->
    <div class="control-group">
        <div class="controls">
            {{ Form::submit('Login', array('class' => 'btn')) }}
        </div>
    </div>

{{ Form::close() }}
@stop