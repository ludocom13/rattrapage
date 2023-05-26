@extends('layouts.app')

@section('title')

<!-- Barre de recherche présente dans la page qui liste les participants-->

<div class="search" style="float:right">
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">valider</span>
            </button>
        </span>
    </div>
</form>

</div>
<h1 class="titre1">Liste Participants</h1>
@endsection

@section('content')
<div class="chef">

<!--Liste des participants afficher avec un foreach sur $participants-->

<p>@foreach($participants as $key => $value)</p>
<div class="reponses">
    <div class="divemail" >
        <h2>{{$value->email}}</h2>
    </div>
    
    <p>1. {{$value->Q1}}</p>
    <p>2. {{$value->Q2}}</p>
    <p>3. {{$value->Q3}}</p>
    <p>4. {{$value->Q4}}</p>
    <p>5. {{$value->Q5}}</p>
    <p>6. {{$value->Q6}}</p>
    
</div>@endforeach
      @endsection
</div>


    
  


  
