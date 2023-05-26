<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;



class ParticipantController extends Controller
{
    //fonction index qui renvoi à la vue du create
    public function index()
    {
        return
        view("participants/create");
    }
    //fonction create avec la le formulaire(sondage) post
    public function create()
    {
        return
        view("participants/create");
    }
    // fonction store qui récupère les réponses et l'email du participant
    public function store(Request $request)
    {
        $request->validate([
            "Q1"=>"required|string|max:50",
            "Q2"=>"required|string|max:50",
            "Q3"=>"required|string|max:50",
            "Q4"=>"required|string|max:50",
            "Q5"=>"required|string|max:50",
            "Q6"=>"required|string|max:50",
            "email"=>"required|string|max:250",
        ]);
        $participants=Participant::all();
        $participant=Participant::create([
            "Q1"=>$request->Q1,
            "Q2"=>$request->Q2,
            "Q3"=>$request->Q3,
            "Q4"=>$request->Q4,
            "Q5"=>$request->Q5,
            "Q6"=>$request->Q6,
            "email"=>$request->email,
        ]);
        return
        view("participants/store", ["request"=>$request]);
    }
    //fonction show qui affiche la liste des participants
    public function show(Participant $participants)
    {
        $participants=Participant::all() ;

        return
            view("user/participants_list", ["participants"=>$participants]);
    }
           
}

            