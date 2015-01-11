      
<!doctype html>
<html lang="fr">

<head>

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">

    <title>Laravel PHP Framework</title>

 {{ HTML::style('css/foundation.min.css') }}

 {{ HTML::style('css/style.css') }}

</head>

<body>


<nav class="top-bar" data-topbar>

  <ul class="title-area">

    <li class="name">

      <h1><a href="#">Projet 1</a></h1>

    </li>

  </ul>


  <section class="top-bar-section">

    <!-- Right Nav Section -->

    <ul class="right">

      <li class="active">{{ HTML::link('users/register', 'Register') }}</li>

      <li>{{ HTML::link('users/login', 'Login') }}</li>

    </ul>


    <!-- Left Nav Section -->

    <ul class="left">

      <li><a href="#">Left Nav Button</a></li>

    </ul>

  </section>

</nav>



<div class="container">

      @if(Session::has('message'))

         <p class="alert">{{ Session::get('message') }}</p>

      @endif

    </div>

      

      {{ $content }}

       

</body>

</html>
