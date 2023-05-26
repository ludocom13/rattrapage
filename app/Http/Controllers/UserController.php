<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



//Controleur pour la GESTION [Admin]
 
class UserController extends Controller{
    //page index$
    public function index(){
        return view("admin/connexion");
    }
    //page de connexion
    public function create()
    {
        return view("admin/connexion");
    }
    // Authentification de l'administrateur requete post
    public function login(Request $request){
        $request->validate([
            "email"=>"required|string|max:200",
            "password"=>"required|string|max:20",
        ]);

      $user=User::saved([
        "email"=> $request->email,
        "password"=>hash::make($request->password),
      ])  ;
     $credentials=$request->only("email","password");
// On recupere les données du formulaire de login
if (Auth::attempt($credentials)) {  $request->session()->regenerate();
 
    return  view('admin/connecter', ['request' => $request]);
    }
else return 
view("/admin/erreur");
           


    }
}