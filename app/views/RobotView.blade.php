<!doctype html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>RAPA</title>

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #333;    
    text-align: center;
    height: 300px !important;
}
.carousel{
    margin-top: 20px;
	color: #4C69A6;
}
.bs-example{
	margin: 20px;
}

.jumbotron {
padding: 30px 15px;
margin-bottom: 30px;
color: inherit;
background-color: #9ABCF0;
}

body {
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-size: 14px;
line-height: 1.42857143;
color: #333;
background-color: #456296;
}

</style>
	
</head>


<body>

@extends('layouts.master')

@section('title')
@parent
:: Login
@stop



	<!-- HEADER DE LA PAGE -->

	<div class="jumbotron">
		<h1><img src="RAPA.jpg" alt="HTML5 Icon" width="170" height="115"> vous souhaite la bienvenue !</h1>
		<p>RAPA est un robot conçu muni d'une caméra, de hauts parleurs et d'un micro et accompagné d'une télécommande.
		Il est activé par son propriétaire par appui sur la télécommande ou en cas d'une chute de celui-ci.
		Ce qui se passe: <br>
		1) Une notification est immédiatement envoyée sur smartphone aux proches du propriétaire. <br>
		2) Le robot détecte l'endroit où se trouve le propriétaire <br>
		3) La caméra s'allume et le propriétaire peut discuter grâce à la caméra et le micro avec l'un des proches qui 
		le contacte.</p>
        <!-- <img src="Robot.png" alt="HTML5 Icon" width="185" height="150" position=center> -->
        <img src="Robot.png" alt="HTML5 Icon" class="img-responsive">
        
	</div>

	<!-- FIN HEADER DE LA PAGE -->
	
	



	<!--CAROUSEL -->

<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
       
	   
	   <!-- Carousel items -->
            
        <div class="carousel-inner">
            <div class="active item">
                <h2></h2>
                <div class="carousel-caption">
                    <img src="slide1.png" alt="HTML5 Icon" width="115" height="115">
                  <h3>Votre parent est seul à son domicile... Que pourrait-il se passer?</h3>
                  <p>Et on ne veut définitivement pas ça!</p>
                </div>
            </div>
            
            
            <div class="item">
                <h2></h2>
                <div class="carousel-caption">
                    <img src="slide2.jpg" alt="HTML5 Icon" width="130" height="110">
                  <h3>Mais nous avons une solution!</h3>
                  <p>RAPA est un robot conçu pour ce genre de situations.</p>
                </div>
            </div>
            
            <div class="item">
                <h2></h2>
                <div class="carousel-caption">
                    <img src="slide3.jpg" alt="HTML5 Icon" width="140" height="120">
                  <h3>Nous vous offrons de la tranquillité d'esprit.</h3>
                  <p>Grâce à RAPA vous êtes sûrs que vos proches sont en sécurité à tout moment!</p>
                </div>
            </div>
        </div>

        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

	<!-- FIN CAROUSEL -->




   <!-- CHOIX DU FORFAIT -->

<div class="bs-example">
    <table class="table table-striped">
        <thead>
            <tr>
                <td>    </td>
                <td><img src="basiclogo.jpg" alt="HTML5 Icon" width="75" height="50"></td>
                <td><img src="premiumlogo.jpg" alt="HTML5 Icon" width="75" height="50"></td>
                <td><img src="deluxelogo.jpg" alt="HTML5 Icon" width="75" height="50"></td>
            </tr>
            <tr>
                <th>Les forfaits </th>
                <th>Basic</th>
                <th>Premium</th>
                <th>Deluxe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Contrôle manuel & autonome</td>
                <td><span class="glyphicon glyphicon-ok"></span></td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
            </tr>
            <tr>
                <td>Vidéo</td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
            </tr>
            <tr>
                <td>Communication via la caméra</td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
            </tr>
             <tr>
                <td>Entreprise vidéo sureveillance 24/7</td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
                <td><span class="glyphicon glyphicon-ok"></td>
            </tr>
            <tr>
                <td>Installation</td>
                <td>Offert</td>
                <td>Offert</td>
                <td>Offert</td>
            </tr>
            <tr>
                <td>Assistance téléphonique</td>
                <td>Offert</td>
                <td>Offert</td>
                <td>Offert</td>
            </tr>
             <tr>
                <td>Nombre d'étage</td>
                <td>1</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>Prix</td>
                <td>429,99€</td>
                <td>529,99€</td>
                <td>+150€/étage</td>
            </tr>
            <tr>
                <td>Forfait par mois</td>
                <td>24,99€</td>
                <td>39,99€</td>
                <td>59,99€</td>
            </tr>
            <tr>
                <td>    </td>
                <td><p><a href="#" class="btn btn-primary" role="button">Choisir</a></p></td>
                <td><p><a href="#" class="btn btn-primary" role="button">Choisir</a></p></td>
                <td><p><a href="#" class="btn btn-primary" role="button">Choisir</a></p></td>
            </tr>
        </tbody>
    </table>
</div>

    <!-- FIN CHOIX DU FORFAIT -->

</body>