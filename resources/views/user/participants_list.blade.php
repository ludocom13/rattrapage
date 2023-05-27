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


<!--Liste des participants afficher avec un foreach sur $participants-->

<p>@foreach($participants as $key => $value)</p>

<table>
    <thead">
        <tr >
            <th style="border:solid;background-color:darkseagreen;">{{$value->email}}</th>
        </tr>
    </thead>
    <tbody>
        <tr style="display: block;height:max-content;background-color:lavender;width:400px">
            <td style="background-color:bisque;">{{$value->Q1}}</td>
            <td>{{$value->Q2}}</td>
            <td style="background-color:bisque;">{{$value->Q3}}</td>
            <td>{{$value->Q4}}</td>
            <td style="background-color:bisque;">{{$value->Q5}}</td>
            <td>{{$value->Q6}}</td>
        </tr>
    </tbody>
    </table>
       
   
    
@endforeach 
@endsection


      



    
  


  
