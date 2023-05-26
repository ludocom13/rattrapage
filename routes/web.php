<?php

use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Models\Participant;
use Illuminate\Auth\Middleware\Authenticate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;


//controlleur pour les participants au questionnaire(sondage)
Route::get('/',[ParticipantController::class,"index"])->name("index");
Route::get('/sondage',[ParticipantController::class,"create"])->name("sondage.create");
Route::post('/sondage/',[ParticipantController::class,"store"])->name("sondage.store");
Route::get('/participants/',[ParticipantController::class,"show"])->name("sondage.show")->middleware("auth");


//controlleur pour la connexion de l'utilisateur Admin
Route::get('/gestion',[UserController::class,"index"])->name("index.connexion");
Route::get('/connexion',[UserController::class,"create"])->name("connexion.connexion");
Route::post('/connexion',[UserController::class,"login"])->name("connexion.connecter");


//Route pour la recherche par email avec la fonctionnalité à l'intérieur
Route::any('/search', function () {
   
    $q = Request::input('q');
    $participant = Participant::where('email', 'LIKE', '%'.$q.'%')->get();
if(count($participant) > 0) {
    return view('user/search', ["q"=>$participant]);
} else {
        return view("user/searcherror");
    }
});
