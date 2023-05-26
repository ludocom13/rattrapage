@extends('layouts.app')
<!--Vue vers laquelle l'utilisateur administrateur est redirigé si la connexion est valider-->
@section('title')
<h1>Espace de gestion administrateur</h1>
@endsection
@section('content')
<p>Vous êtes connecté !</p>

<p>{{$request->email}}</p>


@endsection

@section('footer')
<!--Liens vers la page:liste des participants-->
<footer>
    <ul>
        <li> <a href="{{route('sondage.show')}}"</a>Participants</li>
    </ul>
</footer>
@endsection


