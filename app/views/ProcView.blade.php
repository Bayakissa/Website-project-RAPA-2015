<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	
	
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #912;
			background-color : #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<h1>MAKE IT YOURSELF</h1>

	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>Cover Template for Bootstrap</title>
		<!-- Bootstrap core CSS -->
		<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="cover.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
		<style type="text/css"></style>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<style type="text/css"></style>
		<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script><style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css"></style>
		</head>
	
		<body>
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="cover-container">
					<div class="masthead clearfix">
						::before
						<li class="active">
						<a href="#">Home</a>
						</li>
						<li>
							<a href="#"> Features </a>
						</li>
						::after
					</ul>
					</div>
					::after
					</div>
					<div class="inner cover">
						<h1 class="cover-heading"> Pimp your PC ! </h1>
						<p class="lead">
						"Ici vous pourrrez customisez en partie ou totalement votre PC selon votre budget grace a une sélection des 
						meilleurs composants ! "
						</p>
						<p class="lead">
							<a href="#" class="btn btn-lg btn-default"> Commencer </a>
						</p>
						</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			<div class="jumbotron">
				<h1>Bienvenu !</h1>
				<p>Ici, vous pourrez choisir vos composants et assembler votre PC selon votre budget !</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button"> Commencer ! </a></p>
			</div>
			
			<div class="welcome">
				
				@foreach ($composants as $composants)
				<h2>{{ $composants->component }} <small> {{ $composants->brand }} Modèle : {{ $composants->model }} {{ $composants->price }} </small></h2>
				<div class="page-header">
					 
			</div>
			@endforeach
			
		<a href="http://www.compagniecorossol.com" title="ROG"><img src="http://www.planete-multimedia.fr/site/medias/Asus-Rog.png" align="center"></a>
		


	</div>
</body>
</html>
