@extends('layouts.app')
<div class="titre1">
      @section('title')
<h1 class="titre1">Polo vert</h1>
<p class="titre1">association contre la pollution industrielle</p> 
</div>
@endsection

@section('content') 



<!--Formulaire(Sondage)sous forme de questionnaire method:post vue:create.blade.php-->

<div class="forming">

       <form class="formsondage" action="{{route('sondage.store')}}" method="post" name="sondage">
       @csrf
       <h2 class="titre2">Sondage</h2>
<div >
           <label for="Q1">Question 1</label>
           <p>Laquelles de ces entreprises appartient au secteur industriel ?</p>
       <select class="formsondage"  name="Q1" id="Q1">
           <option></option>
           <option>Gazprom</option>
           <option>Nike</option>
           <option>Vwolkswagen</option>
           <option>Carrefour</option>
       </select>
    </div>

    <div>
           <label for="Q2">Question 2</label>
           <p>Selon vous,quels sont pour l'homme,les risques liés à la pollution industrielle ?</p>
           <input class="formsondage" type="text" name="Q2" id="Q2"/>
    </div>
    <div>
           <label for="Q3">Question 3</label>
           <p>Quels sont les risques pour la nature, liés à la pollution industrielle ?</p>
           <input class="formsondage" type="text" name="Q3" id="Q3"/>
    </div>

    <div>
           <label for="Q4">Question 4</label>
           <p>Pensez vous que les amendes infligées aux grands groupes sont'elles suffisaments dissuasives ?</p>
           <input class="formsondage" type="text" name="Q4" id="Q4"/>
    </div>
    <div>
           <label for="Q5">Question 5</label>
           <p>Combien de temps mettent les déchets plastiques à se désintégrer ?</p>
           <input class="formsondage" type="text" name="Q5" id="Q5"/>
    </div>
    <div>
           <label for="Q6">Question 6</label>
           <p>Êtes vous pour ou contre la manifestation ?</p>
           <input class="formsondage"  type="text" name="Q6" id="Q6"/>
    </div>

    <div>
        <label for="email">Adresse Email</label><br>
        <input class="formsondage"  type="email" name="email" id="email"/><br>
    </div>

    <input class="btn1" type="submit" value="valider" name="submit_form"/>
</form>
@if($errors->any())
            @foreach($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
        @endif
     
@endsection     
</div>

