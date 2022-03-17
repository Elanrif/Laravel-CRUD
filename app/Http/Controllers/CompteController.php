<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Utilisateur ;



class CompteController extends Controller
{
   

    public function acceuil()
    { 
  
        return view('mon-compte');
    }

    public function deconnexion() 
    {
        auth()->logout()  ; 

        return redirect('/');
    }

    public function modificationMotDePasse()
     { 

        if(auth()->guest()) { 

             return back()->withInput()->withErrors([
            'email' =>'Vos identifants sont incorrrects ! .',
            'password' => 'Avez vous oubliez le mot de passe ? ',
        ]);
        }

       request()->validate([
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
        ]);

        $this->auth()->user()->update([        //ne marche pas ! ERREUR : sortir le THIS ?
    'mot_de_passe' => bcrypt(request('password')),
         ]);
      
    
   
    return redirect('/connexion');

    }
}
