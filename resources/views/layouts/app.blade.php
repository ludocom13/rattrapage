<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet"meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>POLO VERT</title>
</head>
<body class="body_app">
    <header class="headerapp" >
        <nav class="navapp" >
            <ul class="ulapp">
              <li class="titre1"> <a href="{{route('index')}}">Acceuil</a></li>
              <li class="titre1"> <a href="{{route('connexion.connexion')}}">Connexion</a></li>
              <li class="titre1"> <a href="{{route('sondage.show')}}">Gestion</a></li>
              
            </ul>
        </nav>
    </header>
  <div class="all">
     <h1>@yield("title")</h1>

         @yield("content")
  </div>



   <div class="footer" >
 <p>Mentions légales</p>
   </div>

</body>
</html>