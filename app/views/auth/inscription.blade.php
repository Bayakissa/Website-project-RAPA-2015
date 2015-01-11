<!doctype html>

@extends('layouts.master')
 
@section('content')

<html>
<head>
	<title>Inscription</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 

<style type="text/css">
    p{
    	margin: 20px;
    }
	
	html, body {
height: 100%;
background-color: #87AFED;
}
</style>
</head>

<body>

    <div class="col-md-12">
      <h4><strong> Pour vous inscrire veuillez remplir ce formulaire : </strong></h4>
    </div>
    <br>
    <div class="row col-md-12">
        @if ($errors->count() > 0)
            <div class="col-md-9">
                <div class="alert alert-danger">
                    @foreach($errors->all() as $message)
                        {{ $message }}<br />
                    @endforeach           
                </div>
            </div>
        @endif


        <div class="col-md-9">

            {{ Form::open(array('url' => 'inscription', 'method' => 'post', 'class' => 'form-horizontal well')) }}

            <div class="form-group {{ $errors->has('username') ? 'error' : '' }}">
                {{ Form::label('username', 'Pseudo :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::text('username', '', $attributes = array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'error' : '' }}">
                {{ Form::label('email', 'Mail :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::text('email', '', $attributes = array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? 'error' : '' }}">
                {{ Form::label('password', 'Mot de passe :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::password('password', $attributes = array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('password_confirmation', 'Confirmation passe :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::password('password_confirmation', $attributes = array('class' => 'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                    {{ Form::submit('Envoyer', array('class' => 'btn btn-info pull-right')) }}
                </div>
            </div>

            {{ Form::close()}}
        </div>
    </div>

</body>
</html>
@stop
