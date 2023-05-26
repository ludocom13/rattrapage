@extends('layouts.app')

@section('title')
<h1 class="titre1">Résultats de Recherche</h1>
@endsection

@section('content')
<div class="container">
   
 <!--Résultat de la recherche avec un foreach sur la variable $q-->  
   
                    <div class="modif">
                    @foreach($q as $key => $value)

                    <h2><span> Adresse Email : </span>{{$value->email}}</h2>


                    <p><span class="num"> Participant n° </span> {{$value-> id}}</p>
                    <p><span>Réponse 1 -</span> {{$value->Q1}}</p>
                    <p><span>Réponse 2 -</span> {{$value->Q2}}</p>
                    <p><span>Réponse 3 -</span> {{$value->Q3}}</p>
                    <p><span>Réponse 4 -</span> {{$value->Q4}}</p>
                    <p><span>Réponse 5 -</span>  {{$value->Q5}}</p>
                    <p><span>Réponse 6 -</span>  {{$value->Q6}}</p>
                    @endforeach
                    </div>

 <!--Lien de retour vers la page de recherche-->
           <a href="{{route('sondage.show')}}">Retour</a>
</div>
@endsection

