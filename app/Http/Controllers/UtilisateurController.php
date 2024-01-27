<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Hashing\HashManager


class UtilisateurController extends Controller
{
    public function inscrire(Request $request)
    {
        Utilisateur::create([
            "nom_ut" => $request->nom_ut,
            "prenom_ut" => $request->prenom_ut,
            "email_ut" => $request->email_ut,
            "num_tel" => $request->num_tel,
            "motDepasse" => Hash::make ($request->motDepasse),
        ]);
        return view('login');
    }
    public function connecter(Request $request){
        $user = Utilisateur::where('email_ut',$request->email_ut)->first();
        //la fonction hash::make permet de chiffrer le mot de passe
        if($user && Hash::check($request->motDepasse===$user->motDepasse)){
            // Mot de passe correct, rediriger vers la page d'accueil ou toute autre page appropriée
            return view('template/layout');
        }
        else{
            // Mot de passe incorrect, rediriger avec un message d'erreur
        return redirect()->back()->with('error', 'Adresse e-mail ou mot de passe incorrect.');
    }
        }
      /*  protected function attemptLogin(Request $request)
        {
            return Auth::attempt(
                $this->credentials($request) + ['role' => $request->role],
                $request->filled('remember')
            );
        }*/


 }

