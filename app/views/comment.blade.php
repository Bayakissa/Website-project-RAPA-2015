@extends('layouts.master')
 
@section('content')

<html>
<head>
    <title>Laissez-nous un message!</title>
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

<?php 

/*	$pseudo = Input::get('pseudo');
	$email = Input::get('email');
	$comment = Input::get('comment');

	DB::insert('insert into comments (id, pseudo, email, comment) values (?, ?, ?, ?)', array('', '$pseudo','$email', '$comment'));

	$comments = DB::table('comments')->get();

	foreach ($comments as $comments)
	{
	    var_dump($comments->pseudo);
	}
*/

?>
<div class="col-md-12"><strong>
        Vous avez quelque chose à partager? Lancez-vous !
    </strong></div>
    <br>
    <div class="row col-md-12">
        @if (Session::has('flash_error'))
            <div class="col-md-7">
                <div class="alert alert-danger">
                    {{ Session::get('flash_error') }}
                </div>
            </div>
        @endif
        <div class="col-md-7">
			
			{{ Form::open(array('url' => 'comments', 'method' => 'post', 'class' => 'form-horizontal well')) }}

            <div class="form-group {{ $errors->has('pseudo') ? 'error' : '' }}">
                {{ Form::label('pseudo', 'Pseudo :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::text('pseudo', '', $attributes = array('class' => 'form-control')) }}
                </div>
            </div>


            <div class="form-group {{ $errors->has('email') ? 'error' : '' }}">
                {{ Form::label('email', 'Mail :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::text('email', '', $attributes = array('class' => 'form-control')) }}
                </div>
            </div>


            <div class="form-group {{ $errors->has('comment') ? 'error' : '' }}">
                {{ Form::label('comment', 'Message :', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-8">
                    {{ Form::textarea('comment', '', $attributes = array('class' => 'form-control')) }}
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