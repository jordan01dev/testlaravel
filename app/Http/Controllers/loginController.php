<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register(Request $request)
    {
        $request->validate([
            'nom_ut' => 'required',
            'prenom_ut' => 'required',
            'email_ut' => 'required|email|unique:utilisateurs,email',
            'num_tel' => 'required',
            'motDepasse' => 'required|min:6',
        ]);

        $user = new User([
            'nom' => $request->input('nom_ut'),
            'prenom' => $request->input('prenom_ut'),
            'email' => $request->input('email_ut'),
            'num_tel' => $request->input('num_tel'),
            'mot_de_passe' => bcrypt($request->input('motDepasse')),
        ]);

        $user->save();
       // Ou redirigez vers la page de connexion, par exemple
        return Redirect::to('/login')->with('success', 'Enregistrement réussi!');


    }

   /* public function store(Request $request)
    {
        // Logique de validation ici...

        $credentials = $request->only('email_ut', 'motDepasse');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Vérifiez le rôle de l'utilisateur
            if ($user->role === 0) {
                return redirect()->route('agent.dashboard'); // Changez 'agent.dashboard' par le nom réel de votre route pour le tableau de bord de l'agent
            } else {
                return redirect()->route('template.layout'); // Changez 'admin.dashboard' par le nom réel de votre route pour le tableau de bord de l'administrateur
            }
        } else {
            return redirect()->route('login')->with('error', 'Identifiants invalides. Veuillez réessayer.'); // Ajustez la route selon vos besoins
        }
    }*/
    public function role(Request $request)
    {
        $validator=Validator::make($request->all(),[
           'email'=>'required|email_ut',
           'password'=>'required',

        ]);
        if($validator->passes())
        {
            if(Auth::attemp(['email'=>$request->email_ut,'password'=>$request->motDepasse,'role'=>$request->Agent]))
            {
                return redirect()->route('Agent');
            }
            else
            {
                return redirect()->route('login')->with('error','votre email ou mot de passe n est pas valide');
            }
        }
    }
}
