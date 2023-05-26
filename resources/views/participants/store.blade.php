@extends('layouts.app')
<!--Récupération des réponses au sondage, vue:store.blade.php-->

@section('title')
<h1>Réponses</h1>
@endsection
@section('content')
<div class="reponses">
    <div class="email">
        <p>Adresse Email : {{$request->email}}</p>
    </div>
    <p>1 . {{$request->Q1}}</p>
    <p>2 . {{$request->Q2}}</p>
    <p>3 . {{$request->Q3}}</p>
    <p>4 . {{$request->Q4}}</p>
    <p>5 . {{$request->Q5}}</p>
    <p>6 . {{$request->Q6}}</p>
    
    
</div>
@endsection