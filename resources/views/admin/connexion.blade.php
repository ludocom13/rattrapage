@extends('layouts.app')

@section('title')

<h1 class="login">Espace de gestion administrateur </h1>
@endsection
@section('content')

<div class="login">
    <h2>connexion</h2>
<!--Formulaire de connexion pour l'utilisateur Administrateur, vue:connexion.blade.php-->

    <form class="formlogin" action="{{route('connexion.connecter')}}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email"/>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password"/>
        <div>
            <input type="submit" value="valider" name="submit_connex">
        </div>
    </form>
</div>
@endsection